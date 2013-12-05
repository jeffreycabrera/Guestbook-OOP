<?php



/**
 * Filename: MessageDAO.php (Data Access Object)
 * Message class for the Guestbook
 */
class MessageDAO {

    /**
     * @param Message object
     * @return Boolean is the message added to messages table or not
     */
    public static function createMessage($message) {
        
        $name = $message['name'];
        $message2 = $message['message'];
        $email = $message['email'];
        $query = "INSERT INTO `messages`(`name`, `message`, `email`, `date_posted`) VALUES ('$name','$message2','$email',CURRENT_DATE)";
        mysql_query($query); 
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function getMessage() {
        // Execute SQL to fetch message based on ID
        $query = mysql_query("SELECT * FROM `messages` WHERE is_approved = 'Y'");
        return $query;

        
    }

    public static function numRows() {
        // 
        $rows = mysql_query("SELECT * FROM `messages` WHERE is_approved = 'Y'");
        mysql_num_rows($rows);
    }

    /**
     * @return Array of Message objects
     */
    public static function getAllMessages() {
        // Execute SQL to fetch all messages
        $query = mysql_query("SELECT * FROM `messages`");
        return $query;

     


    }

    /**
     * @param Message object
     * @return Boolean is the message updated or not
     */
    public static function updateMessage($message) {
        // Execute SQL to update the message
            $id = $message['id'];
            $name = $message['name'];
            $message2 = $message['message'];
            $email = $message['email'];
            $is_approved = $message['is_approved'];
            mysql_query("UPDATE `messages` SET `id`='$id',`name`='$name',`message`='$message2',`email`='$email',`date_posted`=CURRENT_DATE,`is_approved`='$is_approved'");
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function deleteMessage($id) {
        // Execute SQL to delete the message based on ID
        mysql_query("DELETE FROM messages WHERE id = '$id'");
    }

    /**
     * Set is_approved to 'Y'
     * @param Integer id number
     * @return Boolean
     */
    public static function approveMessage($id) {
            mysql_query("UPDATE messages SET is_approved='Y' WHERE id='$id'");
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function rejectMessage($id) {
            mysql_query("UPDATE messages SET is_approved='N' WHERE id='$id'");
    }
}

?>
