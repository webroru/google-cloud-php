<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        \GPBMetadata\Google\Type\PostalAddress::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a93260a28676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f636f6d6d6f6e2e70726f746f121b676f6f676c652e636c6f75642e" .
            "74616c656e742e763462657461311a1f676f6f676c652f70726f746f6275" .
            "662f74696d657374616d702e70726f746f1a1e676f6f676c652f70726f74" .
            "6f6275662f77726170706572732e70726f746f1a18676f6f676c652f7479" .
            "70652f6c61746c6e672e70726f746f1a17676f6f676c652f747970652f6d" .
            "6f6e65792e70726f746f1a20676f6f676c652f747970652f706f7374616c" .
            "5f616464726573732e70726f746f226e0a0e54696d657374616d7052616e" .
            "6765122e0a0a73746172745f74696d6518012001280b321a2e676f6f676c" .
            "652e70726f746f6275662e54696d657374616d70122c0a08656e645f7469" .
            "6d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d" .
            "657374616d7022b7030a084c6f636174696f6e12490a0d6c6f636174696f" .
            "6e5f7479706518012001280e32322e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e4c6f636174696f6e2e4c6f636174696f6e" .
            "5479706512320a0e706f7374616c5f6164647265737318022001280b321a" .
            "2e676f6f676c652e747970652e506f7374616c4164647265737312240a07" .
            "6c61745f6c6e6718032001280b32132e676f6f676c652e747970652e4c61" .
            "744c6e6712140a0c7261646975735f6d696c657318042001280122ef010a" .
            "0c4c6f636174696f6e54797065121d0a194c4f434154494f4e5f54595045" .
            "5f554e5350454349464945441000120b0a07434f554e545259100112170a" .
            "1341444d494e4953545241544956455f415245411002121b0a175355425f" .
            "41444d494e4953545241544956455f415245411003120c0a084c4f43414c" .
            "4954591004120f0a0b504f5354414c5f434f4445100512100a0c5355425f" .
            "4c4f43414c495459100612120a0e5355425f4c4f43414c4954595f311007" .
            "12120a0e5355425f4c4f43414c4954595f32100812100a0c4e4549474842" .
            "4f52484f4f44100912120a0e5354524545545f41444452455353100a229f" .
            "010a0f526571756573744d65746164617461120e0a06646f6d61696e1801" .
            "2001280912120a0a73657373696f6e5f6964180220012809120f0a077573" .
            "65725f696418032001280912190a11616c6c6f775f6d697373696e675f69" .
            "6473180420012808123c0a0b6465766963655f696e666f18052001280b32" .
            "272e676f6f676c652e636c6f75642e74616c656e742e763462657461312e" .
            "446576696365496e666f22260a10526573706f6e73654d65746164617461" .
            "12120a0a726571756573745f696418012001280922cf010a0a4465766963" .
            "65496e666f12470a0b6465766963655f7479706518012001280e32322e67" .
            "6f6f676c652e636c6f75642e74616c656e742e763462657461312e446576" .
            "696365496e666f2e44657669636554797065120a0a026964180220012809" .
            "226c0a0a44657669636554797065121b0a174445564943455f545950455f" .
            "554e535045434946494544100012070a035745421001120e0a0a4d4f4249" .
            "4c455f5745421002120b0a07414e44524f4944100312070a03494f531004" .
            "12070a03424f54100512090a054f54484552100622510a0f437573746f6d" .
            "41747472696275746512150a0d737472696e675f76616c75657318012003" .
            "280912130a0b6c6f6e675f76616c75657318022003280312120a0a66696c" .
            "74657261626c6518032001280822570a125370656c6c696e67436f727265" .
            "6374696f6e12110a09636f7272656374656418012001280812160a0e636f" .
            "727265637465645f7465787418022001280912160a0e636f727265637465" .
            "645f68746d6c180320012809229c090a10436f6d70656e736174696f6e49" .
            "6e666f12500a07656e747269657318012003280b323f2e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e436f6d70656e736174" .
            "696f6e496e666f2e436f6d70656e736174696f6e456e747279126b0a2261" .
            "6e6e75616c697a65645f626173655f636f6d70656e736174696f6e5f7261" .
            "6e676518022001280b323f2e676f6f676c652e636c6f75642e74616c656e" .
            "742e763462657461312e436f6d70656e736174696f6e496e666f2e436f6d" .
            "70656e736174696f6e52616e6765126c0a23616e6e75616c697a65645f74" .
            "6f74616c5f636f6d70656e736174696f6e5f72616e676518032001280b32" .
            "3f2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e" .
            "436f6d70656e736174696f6e496e666f2e436f6d70656e736174696f6e52" .
            "616e67651a92030a11436f6d70656e736174696f6e456e747279124c0a04" .
            "7479706518012001280e323e2e676f6f676c652e636c6f75642e74616c65" .
            "6e742e763462657461312e436f6d70656e736174696f6e496e666f2e436f" .
            "6d70656e736174696f6e54797065124c0a04756e697418022001280e323e" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e43" .
            "6f6d70656e736174696f6e496e666f2e436f6d70656e736174696f6e556e" .
            "697412240a06616d6f756e7418032001280b32122e676f6f676c652e7479" .
            "70652e4d6f6e6579480012500a0572616e676518042001280b323f2e676f" .
            "6f676c652e636c6f75642e74616c656e742e763462657461312e436f6d70" .
            "656e736174696f6e496e666f2e436f6d70656e736174696f6e52616e6765" .
            "480012130a0b6465736372697074696f6e180520012809123d0a17657870" .
            "65637465645f756e6974735f7065725f7965617218062001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c756542150a13" .
            "636f6d70656e736174696f6e5f616d6f756e741a6f0a11436f6d70656e73" .
            "6174696f6e52616e6765122c0a106d61785f636f6d70656e736174696f6e" .
            "18022001280b32122e676f6f676c652e747970652e4d6f6e6579122c0a10" .
            "6d696e5f636f6d70656e736174696f6e18012001280b32122e676f6f676c" .
            "652e747970652e4d6f6e657922b5010a10436f6d70656e736174696f6e54" .
            "79706512210a1d434f4d50454e534154494f4e5f545950455f554e535045" .
            "434946494544100012080a0442415345100112090a05424f4e5553100212" .
            "110a0d5349474e494e475f424f4e55531003120a0a064551554954591004" .
            "12120a0e50524f4649545f53484152494e471005120f0a0b434f4d4d4953" .
            "53494f4e53100612080a04544950531007121b0a174f544845525f434f4d" .
            "50454e534154494f4e5f545950451008229c010a10436f6d70656e736174" .
            "696f6e556e697412210a1d434f4d50454e534154494f4e5f554e49545f55" .
            "4e5350454349464945441000120a0a06484f55524c59100112090a054441" .
            "494c591002120a0a065745454b4c591003120b0a074d4f4e54484c591004" .
            "120a0a06594541524c591005120c0a084f4e455f54494d451006121b0a17" .
            "4f544845525f434f4d50454e534154494f4e5f554e495410072a790a0b43" .
            "6f6d70616e7953697a65121c0a18434f4d50414e595f53495a455f554e53" .
            "5045434946494544100012080a044d494e49100112090a05534d414c4c10" .
            "02120b0a07534d454449554d1003120a0a064d454449554d100412070a03" .
            "4249471005120a0a06424947474552100612090a054749414e5410072ae2" .
            "010a0a4a6f6242656e65666974121b0a174a4f425f42454e454649545f55" .
            "4e5350454349464945441000120e0a0a4348494c445f434152451001120a" .
            "0a0644454e54414c100212140a10444f4d45535449435f504152544e4552" .
            "100312120a0e464c455849424c455f484f5552531004120b0a074d454449" .
            "43414c100512120a0e4c4946455f494e535552414e4345100612120a0e50" .
            "4152454e54414c5f4c45415645100712130a0f5245544952454d454e545f" .
            "504c414e1008120d0a095349434b5f444159531009120c0a085641434154" .
            "494f4e100a120a0a06564953494f4e100b2a8e020a0a4465677265655479" .
            "7065121b0a174445475245455f545950455f554e53504543494649454410" .
            "0012150a115052494d4152595f454455434154494f4e1001121d0a194c4f" .
            "5745525f5345434f4e444152595f454455434154494f4e1002121d0a1955" .
            "505045525f5345434f4e444152595f454455434154494f4e1003121c0a18" .
            "4144554c545f52454d454449414c5f454455434154494f4e1004121c0a18" .
            "4153534f4349415445535f4f525f4551554956414c454e541005121b0a17" .
            "42414348454c4f52535f4f525f4551554956414c454e54100612190a154d" .
            "4153544552535f4f525f4551554956414c454e541007121a0a16444f4354" .
            "4f52414c5f4f525f4551554956414c454e5410082adc010a0e456d706c6f" .
            "796d656e7454797065121f0a1b454d504c4f594d454e545f545950455f55" .
            "4e5350454349464945441000120d0a0946554c4c5f54494d451001120d0a" .
            "09504152545f54494d451002120e0a0a434f4e54524143544f5210031214" .
            "0a10434f4e54524143545f544f5f484952451004120d0a0954454d504f52" .
            "4152591005120a0a06494e5445524e1006120d0a09564f4c554e54454552" .
            "1007120c0a085045525f4449454d100812120a0e464c595f494e5f464c59" .
            "5f4f5554100912190a154f544845525f454d504c4f594d454e545f545950" .
            "45100a2a710a084a6f624c6576656c12190a154a4f425f4c4556454c5f55" .
            "4e5350454349464945441000120f0a0b454e5452595f4c4556454c100112" .
            "0f0a0b455850455249454e4345441002120b0a074d414e41474552100312" .
            "0c0a084449524543544f521004120d0a0945584543555449564510052aba" .
            "060a0b4a6f6243617465676f7279121c0a184a4f425f43415445474f5259" .
            "5f554e5350454349464945441000121a0a164143434f554e54494e475f41" .
            "4e445f46494e414e43451001121d0a1941444d494e495354524154495645" .
            "5f414e445f4f46464943451002121d0a194144564552544953494e475f41" .
            "4e445f4d41524b4554494e471003120f0a0b414e494d414c5f4341524510" .
            "04121a0a164152545f46415348494f4e5f414e445f44455349474e100512" .
            "170a13425553494e4553535f4f5045524154494f4e531006121b0a17434c" .
            "45414e494e475f414e445f464143494c4954494553100712130a0f434f4d" .
            "50555445525f414e445f4954100812100a0c434f4e535452554354494f4e" .
            "100912140a10435553544f4d45525f53455256494345100a120d0a094544" .
            "55434154494f4e100b121c0a18454e5445525441494e4d454e545f414e44" .
            "5f54524156454c100c12180a144641524d494e475f414e445f4f5554444f" .
            "4f5253100d120e0a0a4845414c544843415245100e12130a0f48554d414e" .
            "5f5245534f5552434553100f12270a23494e5354414c4c4154494f4e5f4d" .
            "41494e54454e414e43455f414e445f524550414952101012090a054c4547" .
            "414c1011120e0a0a4d414e4147454d454e541012121f0a1b4d414e554641" .
            "43545552494e475f414e445f57415245484f555345101312240a204d4544" .
            "49415f434f4d4d554e49434154494f4e535f414e445f57524954494e4710" .
            "1412160a124f494c5f4741535f414e445f4d494e494e471015121e0a1a50" .
            "4552534f4e414c5f434152455f414e445f5345525649434553101612170a" .
            "1350524f544543544956455f53455256494345531017120f0a0b5245414c" .
            "5f4553544154451018121e0a1a52455354415552414e545f414e445f484f" .
            "53504954414c495459101912140a1053414c45535f414e445f5245544149" .
            "4c101a121b0a17534349454e43455f414e445f454e47494e454552494e47" .
            "101b12220a1e534f4349414c5f53455256494345535f414e445f4e4f4e5f" .
            "50524f464954101c12210a1d53504f5254535f4649544e4553535f414e44" .
            "5f52454352454154494f4e101d12200a1c5452414e53504f52544154494f" .
            "4e5f414e445f4c4f47495354494353101e2a650a0d506f7374696e675265" .
            "67696f6e121e0a1a504f5354494e475f524547494f4e5f554e5350454349" .
            "46494544100012170a1341444d494e4953545241544956455f4152454110" .
            "01120a0a064e4154494f4e1002120f0a0b54454c45434f4d4d5554451003" .
            "2a6a0a0a5669736962696c697479121a0a165649534942494c4954595f55" .
            "4e535045434946494544100012100a0c4143434f554e545f4f4e4c591001" .
            "12160a125348415245445f574954485f474f4f474c45100212160a125348" .
            "415245445f574954485f5055424c494310032a5a0a10436f6e7461637449" .
            "6e666f557361676512220a1e434f4e544143545f494e464f5f5553414745" .
            "5f554e5350454349464945441000120c0a08504552534f4e414c10011208" .
            "0a04574f524b1002120a0a065343484f4f4c10032a710a1048746d6c5361" .
            "6e6974697a6174696f6e12210a1d48544d4c5f53414e4954495a4154494f" .
            "4e5f554e5350454349464945441000121e0a1a48544d4c5f53414e495449" .
            "5a4154494f4e5f44495341424c45441001121a0a1653494d504c455f464f" .
            "524d415454494e475f4f4e4c59100242790a1f636f6d2e676f6f676c652e" .
            "636c6f75642e74616c656e742e76346265746131420b436f6d6d6f6e5072" .
            "6f746f50015a41676f6f676c652e676f6c616e672e6f72672f67656e7072" .
            "6f746f2f676f6f676c65617069732f636c6f75642f74616c656e742f7634" .
            "62657461313b74616c656e74a20203435453620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
