FROM confluentinc/cp-server-connect:6.1.0

USER root

RUN confluent-hub install --no-prompt confluentinc/kafka-connect-salesforce:1.10.3 && confluent-hub install --no-prompt confluentinc/kafka-connect-jdbc:10.2.3
RUN confluent-hub install --no-prompt confluentinc/kafka-connect-ibmmq:11.0.11 

USER 1001
