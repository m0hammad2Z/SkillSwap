FROM openjdk:17-jdk-alpine3.13

WORKDIR /app

COPY target/*.jar /app/app.jar

EXPOSE 8080

CMD ["java", "-jar", "app.jar"]
