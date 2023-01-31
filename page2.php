<html>

<head>
    <style>
        /* Center body contents, both horizontally and vertically */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Rubik", sans-serif;
        }

        /* Style the outer container. Centralize contents, both horizontally and vertically */
        #bot {
            margin: 50px 0;
            height: 700px;
            width: 450px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.2);
            border-radius: 20px;
        }

        /* Make container slightly rounded. Set height and width to 90 percent of .bots' */
        #container {
            height: 90%;
            border-radius: 6px;
            width: 90%;
            background: #F3F4F6;
        }

        /* Style header section */
        #header {
            width: 100%;
            height: 10%;
            border-radius: 6px;
            background: #3B82F6;
            color: white;
            text-align: center;
            font-size: 2rem;
            padding-top: 12px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style body */
        #body {
            width: 100%;
            height: 75%;
            background-color: #F3F4F6;
            overflow-y: auto;
        }

        /* Style container for user messages */
        .userSection {
            width: 100%;
        }

        /* Seperates user message from bot reply */
        .seperator {
            width: 100%;
            height: 50px;
        }

        /* General styling for all messages */
        .messages {
            max-width: 60%;
            margin: .5rem;
            font-size: 1.2rem;
            padding: .5rem;
            border-radius: 7px;
        }

        /* Targeted styling for just user messages */
        .user-message {
            margin-top: 1rem;
            text-align: left;
            background: #3B82F6;
            color: white;
            float: left;
        }

        /* Targeted styling for just bot messages */
        .bot-reply {
            text-align: right;
            background: #E5E7EB;
            margin-top: 1rem;
            float: right;
            color: black;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style the input area */
        #inputArea {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 10%;
            padding: 1rem;
            background: transparent;
        }

        /* Style the text input */
        #userInput {
            height: 20px;
            width: 80%;
            background-color: white;
            border-radius: 6px;
            padding: 1rem;
            font-size: 1rem;
            border: none;
            outline: none;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style send button */
        #send {
            /* height: 50px; */
            padding: .5rem;
            font-size: 1rem;
            text-align: center;
            width: 20%;
            color: white;
            background: #3B82F6;
            cursor: pointer;
            border: none;
            border-radius: 6px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            float: right;
        }
    </style>
</head>

<body>
    <div id="bot">
        <div id="container">
            <div id="header">
                Online Chatbot App
            </div>

            <div id="body">
                <div class="userSection">
                    <div class="messages user-message">

                    </div>
                    <div class="seperator"></div>
                </div>
            </div>

            <div id="inputArea">
                <form action="#" method="POST">
                    <input type="text" name="messages" id="userInput" placeholder="Please enter your message here"
                        required>
                    <input type="submit" id="send" value="Send">
                </form>

            </div>
        </div>
    </div>
</body>

</html>