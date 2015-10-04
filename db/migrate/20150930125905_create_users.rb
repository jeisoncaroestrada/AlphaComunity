class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :name1
      t.string :name2
      t.string :lastname1
      t.string :lastname2
      t.string :email
      t.string :password
      t.string :confirm_password

      t.timestamps
    end
  end
end
