FROM confluentinc/cp-server-connect:6.1.0.0

USER root

RUN confluent-hub install confluentinc/kafka-connect-salesforce:1.10.3 \

&& confluent-hub install confluentinc/kafka-connect-jdbc:10.2.3

USER 1001
