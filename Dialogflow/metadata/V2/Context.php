<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/context.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Context
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa10f0a28676f6f676c652f636c6f75642f6469616c6f67666c6f772f76" .
            "322f636f6e746578742e70726f746f121a676f6f676c652e636c6f75642e" .
            "6469616c6f67666c6f772e76321a1b676f6f676c652f70726f746f627566" .
            "2f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f" .
            "6669656c645f6d61736b2e70726f746f1a1c676f6f676c652f70726f746f" .
            "6275662f7374727563742e70726f746f225c0a07436f6e74657874120c0a" .
            "046e616d6518012001280912160a0e6c6966657370616e5f636f756e7418" .
            "0220012805122b0a0a706172616d657465727318032001280b32172e676f" .
            "6f676c652e70726f746f6275662e537472756374224c0a134c697374436f" .
            "6e746578747352657175657374120e0a06706172656e7418012001280912" .
            "110a09706167655f73697a6518022001280512120a0a706167655f746f6b" .
            "656e18032001280922660a144c697374436f6e7465787473526573706f6e" .
            "736512350a08636f6e746578747318012003280b32232e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e436f6e7465787412170a" .
            "0f6e6578745f706167655f746f6b656e18022001280922210a1147657443" .
            "6f6e7465787452657175657374120c0a046e616d65180120012809225c0a" .
            "14437265617465436f6e7465787452657175657374120e0a06706172656e" .
            "7418012001280912340a07636f6e7465787418022001280b32232e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e76322e436f6e746578" .
            "74227d0a14557064617465436f6e746578745265717565737412340a0763" .
            "6f6e7465787418012001280b32232e676f6f676c652e636c6f75642e6469" .
            "616c6f67666c6f772e76322e436f6e74657874122f0a0b7570646174655f" .
            "6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e46" .
            "69656c644d61736b22240a1444656c657465436f6e746578745265717565" .
            "7374120c0a046e616d65180120012809222a0a1844656c657465416c6c43" .
            "6f6e746578747352657175657374120e0a06706172656e74180120012809" .
            "32ef070a08436f6e746578747312ac010a0c4c697374436f6e7465787473" .
            "122f2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e" .
            "4c697374436f6e7465787473526571756573741a302e676f6f676c652e63" .
            "6c6f75642e6469616c6f67666c6f772e76322e4c697374436f6e74657874" .
            "73526573706f6e7365223982d3e493023312312f76322f7b706172656e74" .
            "3d70726f6a656374732f2a2f6167656e742f73657373696f6e732f2a7d2f" .
            "636f6e7465787473129b010a0a476574436f6e74657874122d2e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e76322e476574436f6e74" .
            "657874526571756573741a232e676f6f676c652e636c6f75642e6469616c" .
            "6f67666c6f772e76322e436f6e74657874223982d3e493023312312f7632" .
            "2f7b6e616d653d70726f6a656374732f2a2f6167656e742f73657373696f" .
            "6e732f2a2f636f6e74657874732f2a7d12aa010a0d437265617465436f6e" .
            "7465787412302e676f6f676c652e636c6f75642e6469616c6f67666c6f77" .
            "2e76322e437265617465436f6e74657874526571756573741a232e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e76322e436f6e746578" .
            "74224282d3e493023c22312f76322f7b706172656e743d70726f6a656374" .
            "732f2a2f6167656e742f73657373696f6e732f2a7d2f636f6e7465787473" .
            "3a07636f6e7465787412b2010a0d557064617465436f6e7465787412302e" .
            "676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e557064" .
            "617465436f6e74657874526571756573741a232e676f6f676c652e636c6f" .
            "75642e6469616c6f67666c6f772e76322e436f6e74657874224a82d3e493" .
            "024432392f76322f7b636f6e746578742e6e616d653d70726f6a65637473" .
            "2f2a2f6167656e742f73657373696f6e732f2a2f636f6e74657874732f2a" .
            "7d3a07636f6e746578741294010a0d44656c657465436f6e746578741230" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e4465" .
            "6c657465436f6e74657874526571756573741a162e676f6f676c652e7072" .
            "6f746f6275662e456d707479223982d3e49302332a312f76322f7b6e616d" .
            "653d70726f6a656374732f2a2f6167656e742f73657373696f6e732f2a2f" .
            "636f6e74657874732f2a7d129c010a1144656c657465416c6c436f6e7465" .
            "78747312342e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e44656c657465416c6c436f6e7465787473526571756573741a162e" .
            "676f6f676c652e70726f746f6275662e456d707479223982d3e49302332a" .
            "312f76322f7b706172656e743d70726f6a656374732f2a2f6167656e742f" .
            "73657373696f6e732f2a7d2f636f6e7465787473429b010a1e636f6d2e67" .
            "6f6f676c652e636c6f75642e6469616c6f67666c6f772e7632420c436f6e" .
            "7465787450726f746f50015a44676f6f676c652e676f6c616e672e6f7267" .
            "2f67656e70726f746f2f676f6f676c65617069732f636c6f75642f646961" .
            "6c6f67666c6f772f76323b6469616c6f67666c6f77f80101a202024446aa" .
            "021a476f6f676c652e436c6f75642e4469616c6f67666c6f772e56326206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}
