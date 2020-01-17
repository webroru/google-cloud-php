<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the smallest syntactic building block of the text.
 *
 * Generated from protobuf message <code>google.cloud.language.v1.Token</code>
 */
class Token extends \Google\Protobuf\Internal\Message
{
    /**
     * The token text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.TextSpan text = 1;</code>
     */
    protected $text = null;
    /**
     * Parts of speech tag for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.PartOfSpeech part_of_speech = 2;</code>
     */
    protected $part_of_speech = null;
    /**
     * Dependency tree parse for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.DependencyEdge dependency_edge = 3;</code>
     */
    protected $dependency_edge = null;
    /**
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     *
     * Generated from protobuf field <code>string lemma = 4;</code>
     */
    protected $lemma = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1\TextSpan $text
     *           The token text.
     *     @type \Google\Cloud\Language\V1\PartOfSpeech $part_of_speech
     *           Parts of speech tag for this token.
     *     @type \Google\Cloud\Language\V1\DependencyEdge $dependency_edge
     *           Dependency tree parse for this token.
     *     @type string $lemma
     *           [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * The token text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.TextSpan text = 1;</code>
     * @return \Google\Cloud\Language\V1\TextSpan
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The token text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.TextSpan text = 1;</code>
     * @param \Google\Cloud\Language\V1\TextSpan $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\TextSpan::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Parts of speech tag for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.PartOfSpeech part_of_speech = 2;</code>
     * @return \Google\Cloud\Language\V1\PartOfSpeech
     */
    public function getPartOfSpeech()
    {
        return $this->part_of_speech;
    }

    /**
     * Parts of speech tag for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.PartOfSpeech part_of_speech = 2;</code>
     * @param \Google\Cloud\Language\V1\PartOfSpeech $var
     * @return $this
     */
    public function setPartOfSpeech($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\PartOfSpeech::class);
        $this->part_of_speech = $var;

        return $this;
    }

    /**
     * Dependency tree parse for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.DependencyEdge dependency_edge = 3;</code>
     * @return \Google\Cloud\Language\V1\DependencyEdge
     */
    public function getDependencyEdge()
    {
        return $this->dependency_edge;
    }

    /**
     * Dependency tree parse for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.DependencyEdge dependency_edge = 3;</code>
     * @param \Google\Cloud\Language\V1\DependencyEdge $var
     * @return $this
     */
    public function setDependencyEdge($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\DependencyEdge::class);
        $this->dependency_edge = $var;

        return $this;
    }

    /**
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     *
     * Generated from protobuf field <code>string lemma = 4;</code>
     * @return string
     */
    public function getLemma()
    {
        return $this->lemma;
    }

    /**
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     *
     * Generated from protobuf field <code>string lemma = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLemma($var)
    {
        GPBUtil::checkString($var, True);
        $this->lemma = $var;

        return $this;
    }

}

