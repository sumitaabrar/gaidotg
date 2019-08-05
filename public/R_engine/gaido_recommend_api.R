#' @get /recomm

function(id,pref){
#id =2; pref = 3;  
#install.packages("dbConnect")
#install.packages("recommenderlab")
#install.packages("reshape2")
library("recommenderlab")
require("reshape2")
require("ggplot2")
library("RMySQL")
library("dbConnect")

con = dbConnect(MySQL() , user = 'root' , password = ''
                , dbname = 'gaido' , host = 'localhost')
dbListTables(con)

myQuery <- paste("SELECT ratings.user_id,ratings.brand_id,ratings.rating FROM ratings JOIN brands ON ratings.brand_id=brands.id WHERE brands.type_id=",pref," ;")
rating_train <- dbGetQuery(con,myQuery)
dbDisconnect(con)

#Cast the rating data into matrix form where row represensts users and columns items
cast_train_data <- acast(rating_train,rating_train$user_id~rating_train$brand_id)
class(cast_train_data)
rating_mat <- as.matrix(cast_train_data)

#Convert the matrix into a rating matrix form where each cell stores the ratings for user - movie combination
rating_real_mat <- as(rating_mat,"realRatingMatrix")

#normalize ratings to view them in standard normal form
rating_norm <-normalize(rating_real_mat)

rating_binary <- binarize(rating_real_mat,minRating=1)

#create a recommender model using User based Collaborative Filtering method
#normalize the scores/ratings and use cosine similarity to group similar movies together
recommender <- Recommender(rating_real_mat[1:nrow(rating_real_mat)],method="UBCF",
                           param=list(normalize="Z-score",method="Cosine"
                                      ,nn=5,minRating=1))

print(recommender)

#Use the recommender model to create a predictions for the ratings and top 5 movies
recommed_topN <-predict(recommender,rating_real_mat[1:nrow(rating_real_mat)],type="topNList",n=5)

recommend_list2 <-as(recommed_topN,"list")
user <- as.data.frame(recommend_list2[[id]])
paste(user$`recommend_list2[[id]]`)

a<-toString(user$`recommend_list2[[id]]`);
browseURL(paste0("http://gaido.local/displayRec?arr=",a));

}