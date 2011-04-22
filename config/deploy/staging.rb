# repository info
set :branch, "development"

# This may be the same as your `Web` server
role :app, "sarniagives.com"

# directories
set :deploy_to, "/home/sgives/subdomains/dev"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[plg_ie6 public template]
