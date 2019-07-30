#//// ///////////////////////on single review////////////////////////////////////////////////////////////////////
args <- commandArgs(TRUE)
sentence <- args
toString(sentence)

#sentence<-"The food is awesome and cool";
library(readr)
library(dplyr)
library(stringr)
library(jsonlite)
library(tidytext)

sentence_df <- data_frame(line = 1, text = sentence)
sentence_words<- sentence_df %>%
  unnest_tokens(word, text)%>%
  filter(!word %in% stop_words$word,
         str_detect(word, "^[a-z']+$"))

AFINN <- sentiments %>%
  filter(lexicon == "AFINN") %>%
  select(word, afinn_score = score)
#AFINN

sentence_sentiment<- sentence_words%>%
  inner_join(AFINN, by="word")%>%
  group_by(line) %>%
  summarize(score=mean(afinn_score))
if(length(sentence_sentiment$score)==0){
  s = 0;
  s
}else{
  sentence_sentiment$score
}


