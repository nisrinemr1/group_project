<?php 
require_once("Connection.php");
//the require_once is the same as the require. When the db is required, it will not include it a second time, juste once.
class Sentences extends Connection {
    // the class sentences is an extention of the connection page. It's a good practice to make it like this. And the connection page is linked to the db on file Connection (cf line 40)
	public function getSentenceRandom(){
		//to get the sentences randomly 
		try{
			//try to 
			$nbSentences = random_int(1, $this->getSentenceCount());
			//the sentence = random_int[minimum, maximum]. On that case, the $this->getSentenceCount()(on line 27) is to get 1 number of the sentences that getSentenceCount has. PS: obligatory to begin at 1 for the minimum :-) 'cause on mysql the tab begin at 1, not 0.
			$request= "SELECT * FROM sentences WHERE sentence_id = $nbSentences";
					//select all from colums from the table sentences on the data base) where sentence_id = nbSentences on line 10 (so the rendom sentence). PS: Can add new sentences in the table, but not delete any sentences of it or it will gives an error.
			if($this->execute($request)!= null){
				//if ($this execute the request (on line 12) is different than null)
				return $this->execute($request)[0]['sentence'];
				// execute => what has on the Connection.php. Execute will turn an array with all the lines. So it will execute the select on line 12. To return the line of the sentence_id where has the same sentence_id of $nbSentences and ['sentence'] is to get the colum 'sentence' on the table.
			}
			else {
				throw new Exception("The sentence doesn't exist") ;
				//throw a new object named "Exception" which has the "The sentence doesn't exist" sentence if the user is searching a specific sentence
			}   
		}
		catch(Exception $e){
			// if it doesn't arrive it will return a null
			return null;
		}
	}
	
    public function getSentenceCount(){
		// to generate the random counting
        try{
            $request= "SELECT COUNT(*) AS nbSentences FROM `sentences`";
						// select count all as nbSentences(line10) from the table sentences
            if($this->execute($request)!= null){
				//if when the execution of the $request si different than null :
                return $this->execute($request)[0]['nbSentences'];
					// execute => what has on the Connection.php. Execute will count as nbSentences from the table 'sentences'. So it will execute the select on line 33. To return the line  of the colum nbSentence.
            }
            else {
                throw new Exception("The sentence doesn't exist") ;
				//throw a new object named "Exception" which has the "The sentence doesn't exist" sentence if the user is searching a specific sentence
            }   
        }
        catch(Exception $e){
            // if it doesn't arrive it will return a null
            return null;
        }
    }
}
 ?>