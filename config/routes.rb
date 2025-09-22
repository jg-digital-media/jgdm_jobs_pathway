Rails.application.routes.draw do
  # Root route - register page like the PHP prototype
  root "users#new"
  
  # User registration
  resources :users, only: [:new, :create]
  
  # Session management (login/logout)
  resource :session, only: [:new, :create, :destroy]
  get "/login", to: "sessions#new"
  delete "/logout", to: "sessions#destroy"
  
  # Jobs management
  resources :jobs do
    member do
      patch :update_stage  # For updating individual job stages
    end
  end
  
  # Additional routes matching the prototype
  get "/list", to: "jobs#index"
  get "/add-job-form", to: "jobs#new"
  get "/how-to", to: "pages#how_to"
  get "/stats", to: "jobs#stats"

  # Reveal health status on /up that returns 200 if the app boots with no exceptions, otherwise 500.
  get "up" => "rails/health#show", as: :rails_health_check

  # Render dynamic PWA files from app/views/pwa/* (remember to link manifest in application.html.erb)
  # get "manifest" => "rails/pwa#manifest", as: :pwa_manifest
  # get "service-worker" => "rails/pwa#service_worker", as: :pwa_service_worker
end
