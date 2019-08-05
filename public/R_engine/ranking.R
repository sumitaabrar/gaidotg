arg <- commandArgs(TRUE)

require("ggplot2")
library("RMySQL")
library("dbConnect")
library("stringr")


con2 = dbConnect(MySQL() , user = 'root' , password = ''
                 , dbname = 'gaido' , host = 'localhost')
myQuery1 <- paste("SELECT brand_id,SUM(rating) FROM ratings GROUP BY brand_id")
result1 <- dbGetQuery(con2,myQuery1)

myQuery2 <- paste("SELECT brand_id,SUM(score) FROM reviews GROUP BY brand_id")
result2 <- dbGetQuery(con2,myQuery2)

realdf <- merge(result1,result2,by = 'brand_id',all=TRUE)

realdf[is.na(realdf)] <- 0

realdf2<-data.frame(realdf$brand_id,realdf$`SUM(rating)`+realdf$`SUM(score)`)

rdf2<-data.frame(realdf$brand_id,rank(-(realdf$`SUM(rating)`+realdf$`SUM(score)`)))
# Change name of 2nd column of df to "b"
names(rdf2)[1] <- "brand_id"
names(rdf2)[2] <- "ranking"
rdf2$created_at <- format(Sys.time())
rdf2$updated_at <- format(Sys.time())
dbWriteTable(con2, name="rankings", value=rdf2,row.names=FALSE,append=TRUE)