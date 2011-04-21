# repository info
set :branch, "BRANCH"

# This may be the same as your `Web` server
role :app, "SERVER"

# directories
set :deploy_to, "/home/USER/subdomains/DOMAIN"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[template plg_ie6]
