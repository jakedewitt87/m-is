<?php
namespace Maven\Infusionsoft\Models;

class ContactAction extends BaseModel
{

    public static $table = 'ContactAction';


    /**
     *
     * Adds a note on the contact record
     * @param        $contactId
     * @param string $title
     * @param string $description
     * @param string $actionType
     *
     * @return array
     * @throws \Exception
     */
    public function addNote($contactId, $title = 'Note', $description = '', $actionType = 'Other')
    {
        $note = [
            'ContactId' => $contactId,
            'ActionDescription' => $title,
            'CreationNotes' =>  $description,
            'ActionType' => $actionType
        ];
        $noteId = $this->SDK->dsAdd(self::$table, $note);
        if(is_int($noteId)) {
            $note['Id'] = $noteId;

            return $note;
        }

        throw new \Exception('Error Creating Note');
    }

}

