import account from Account

class user(Account):

    def __init__(self, id, name, document, email, password):
        self.id = id
        self.name = name
        self.document = document
        self.email = document
        self.password = password