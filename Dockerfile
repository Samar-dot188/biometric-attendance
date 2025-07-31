FROM php:8.2-cli

# Install any needed PHP extensions (adjust as needed)
RUN apt-get update && apt-get install -y \
    php-mysqli \
    php-curl \
    php-gd \
    php-zip \
    && rm -rf /var/lib/apt/lists/*

# Copy your project into the container
COPY . /app
WORKDIR /app/public

# Expose the port Render expects (must be 10000)
EXPOSE 10000

# Start the built-in PHP server serving the /public folder
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
