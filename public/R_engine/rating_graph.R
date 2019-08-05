arg <- commandArgs(TRUE)
args <-arg[1]

require("ggplot2")
library("RMySQL")
library("dbConnect")
library(stringr)


#SELECT MONTH('2017/05/25 09:08') AS Month;
con = dbConnect(MySQL() , user = 'root' , password = ''
                , dbname = 'gaido' , host = 'localhost')
dbListTables(con)

myQuery <- paste("SELECT rating, count(*) AS 'number_of_users' FROM ratings WHERE brand_id=",args," GROUP BY rating;")
result <- dbGetQuery(con,myQuery)

nas <- Sys.time()
imgname <- toString(nas)
imgname <- paste(args,"rate",imgname,".png")
imgname <- str_replace_all(imgname, fixed(" "), "")
imgname <- str_replace_all(imgname, fixed("-"), "")
imgname <- str_replace_all(imgname, fixed(":"), "")


#brandid month and year
setwd("E:/xampp/htdocs/gaidotg/storage/app/public/images/rate_graph")
png(filename = imgname)
ggplot(result,aes(rating,number_of_users)) + 
  geom_bar(stat = "identity", fill="#66CCFF", colour="black") + theme_classic() 
dev.off();

imgname