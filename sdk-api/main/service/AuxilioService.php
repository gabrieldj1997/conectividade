<?

namespace org\gov\br\sdk\service;

use org\gov\br\sdk\entity\request\AuxilioBenifeciarioMunicipioRequest;
use org\gov\br\sdk\entity\request\AuxilioNisRequest;
use org\gov\br\sdk\entity\request\AuxilioMunicipioRequest;

class AuxilioService extends Service {
    public function consultarAuxilioBenifeciarioMunicipio(AuxilioBenifeciarioMunicipioRequest $auxilioBenifeciarioMunicipioRequest){
        $this->setUrlApi("/auxilio-emergencial-beneficiario-por-municipio");
        $this->setRequestObject($auxilioBenifeciarioMunicipioRequest);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function consultarAuxilioNis(AuxilioNisRequest $auxilioNisRequest){
        $this->setUrlApi("/auxilio-emergencial-beneficiario-por-municipio");
        $this->setRequestObject($auxilioNisRequest);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function consultarAuxilioMunicipio(AuxilioMunicipioRequest $auxilioMunicipioRequest){
        $this->setUrlApi("/auxilio-emergencial-beneficiario-por-municipio");
        $this->setRequestObject($auxilioMunicipioRequest);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }
}