FROM wordpress

COPY . /var/www/html/wp-content/themes/aydev

# Volta - Code provided by: https://dev.to/michalbryxi/volta-in-docker-162a
# bash will load volta() function via .bashrc
# using $VOLTA_HOME/load.sh
SHELL ["/bin/bash", "-c"]

# Since we're starting non-interactive shell,
# we wil need to tell bash to load .bashrc manually
ENV BASH_ENV ~/.bashrc
# needed by volta() function
ENV VOLTA_HOME /root/.volta
# make sure packages managed by volta will be in PATH
ENV PATH $VOLTA_HOME/bin:$PATH

# Install volta
RUN curl https://get.volta.sh | bash
RUN volta install node

# Compile CSS
RUN npm config set unsafe-perm true && \
    # Currently we are in the folder /var/www/html so wee need to move to our theme folder
    cd ./wp-content/themes/aydev && \
    npm install && \
    npm run prod

EXPOSE 80

