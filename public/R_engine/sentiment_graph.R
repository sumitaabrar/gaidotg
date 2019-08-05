arg <- commandArgs(TRUE)
args <-arg[1]

require("ggplot2")
library("RMySQL")
library("dbConnect")
library("stringr")



con2 = dbConnect(MySQL() , user = 'root' , password = ''
                , dbname = 'gaido' , host = 'localhost')
dbListTables(con2)
myQuery2 <- paste("SELECT score FROM reviews WHERE brand_id=",args,";")
result2 <- dbGetQuery(con2,myQuery2)
dbDisconnect(con2)
#negative positive count
pos <- length(which(result2$score > 0))
zero<-length(which(result2$score == 0))
neg<-length(which(result2$score < 0))
number_of_reviews<-c(zero,pos,neg)
sentiment<-c("neutral","positive","negative")
df = data.frame(sentiment,number_of_reviews)  

#imagename of graph
nas <- Sys.time()
imgname <- toString(nas)
imgname <- paste(args,"sents",imgname,".png")
imgname <- str_replace_all(imgname, fixed(" "), "")
imgname <- str_replace_all(imgname, fixed("-"), "")
imgname <- str_replace_all(imgname, fixed(":"), "")

#brandid rate date time
setwd("E:/xampp/htdocs/gaidotg/storage/app/public/images/senti_graph")
png(filename = imgname)

ggplot(df,aes(sentiment,number_of_reviews,fill=sentiment)) + 
  geom_bar(stat = "identity") + theme_minimal() 

dev.off();

imgname
