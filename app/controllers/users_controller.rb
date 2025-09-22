class UsersController < ApplicationController
  def new
    # Simple action that doesn't need database
  end

  def create
    # This will be implemented once database is working
    render html: "<h1>Registration Submitted!</h1><p>Database connection coming soon...</p>".html_safe
  end
end
