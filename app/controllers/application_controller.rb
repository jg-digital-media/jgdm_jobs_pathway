class ApplicationController < ActionController::Base
  # Only allow modern browsers supporting webp images, web push, badges, import maps, CSS nesting, and CSS :has.
  allow_browser versions: :modern
  
  def hello
    render html: "<h1>🎉 Rails is Working!</h1><p>Jobs Pathway App is starting up...</p><p><a href='/users/new'>Go to Registration</a></p>".html_safe
  end
end
