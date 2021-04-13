# First step - Generate build
# From node 15.14 image as app-builder
FROM node:15.14 as app-builder

# Create a /app-build folder to work in
RUN mkdir /app-build
# Set /app-build as workdir
WORKDIR /app-build

# Copy src and public folders into the workdir folder
COPY hello-world/src src
COPY hello-world/public public
# Copy package.json and package-lock.json files into the workdir folder
COPY hello-world/package.json package.json
COPY hello-world/package-lock.json package-lock.json

# Install project NPM dependencies
RUN npm install
# Build project (Build is generated on a build folder)
RUN npm run build

# First step - Create app from build
# From node 15.14 image as app
FROM node:15.14-alpine as app

# Install serve as global dependency (Used to serve site)
RUN npm install -g serve

# Create a /app folder to work in
RUN mkdir /app
# Set /app as workdir
WORKDIR /app

# Copy build folder from the app-builder image
COPY --from=app-builder /app-build/build /app

# Command to run the app from the app folder
CMD ["serve", "-s", "/app"]
