<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input configuration for BatchTranslateText request.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.InputConfig</code>
 */
class InputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Can be "text/plain" or "text/html".
     * For `.tsv`, "text/html" is used if mime_type is missing.
     * For `.html`, this field must be "text/html" or empty.
     * For `.txt`, this field must be "text/plain" or empty.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $mime_type = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mime_type
     *           Optional. Can be "text/plain" or "text/html".
     *           For `.tsv`, "text/html" is used if mime_type is missing.
     *           For `.html`, this field must be "text/html" or empty.
     *           For `.txt`, this field must be "text/plain" or empty.
     *     @type \Google\Cloud\Translate\V3\GcsSource $gcs_source
     *           Required. Google Cloud Storage location for the source input.
     *           This can be a single file (for example,
     *           `gs://translation-test/input.tsv`) or a wildcard (for example,
     *           `gs://translation-test/&#42;`). If a file extension is `.tsv`, it can
     *           contain either one or two columns. The first column (optional) is the id
     *           of the text request. If the first column is missing, we use the row
     *           number (0-based) from the input file as the ID in the output file. The
     *           second column is the actual text to be
     *            translated. We recommend each row be <= 10K Unicode codepoints,
     *           otherwise an error might be returned.
     *           Note that the input tsv must be RFC 4180 compliant.
     *           You could use https://github.com/Clever/csvlint to check potential
     *           formatting errors in your tsv file.
     *           csvlint --delimiter='\t' your_input_file.tsv
     *           The other supported file extensions are `.txt` or `.html`, which is
     *           treated as a single large chunk of text.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Can be "text/plain" or "text/html".
     * For `.tsv`, "text/html" is used if mime_type is missing.
     * For `.html`, this field must be "text/html" or empty.
     * For `.txt`, this field must be "text/plain" or empty.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Optional. Can be "text/plain" or "text/html".
     * For `.tsv`, "text/html" is used if mime_type is missing.
     * For `.html`, this field must be "text/html" or empty.
     * For `.txt`, this field must be "text/plain" or empty.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Required. Google Cloud Storage location for the source input.
     * This can be a single file (for example,
     * `gs://translation-test/input.tsv`) or a wildcard (for example,
     * `gs://translation-test/&#42;`). If a file extension is `.tsv`, it can
     * contain either one or two columns. The first column (optional) is the id
     * of the text request. If the first column is missing, we use the row
     * number (0-based) from the input file as the ID in the output file. The
     * second column is the actual text to be
     *  translated. We recommend each row be <= 10K Unicode codepoints,
     * otherwise an error might be returned.
     * Note that the input tsv must be RFC 4180 compliant.
     * You could use https://github.com/Clever/csvlint to check potential
     * formatting errors in your tsv file.
     * csvlint --delimiter='\t' your_input_file.tsv
     * The other supported file extensions are `.txt` or `.html`, which is
     * treated as a single large chunk of text.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.GcsSource gcs_source = 2;</code>
     * @return \Google\Cloud\Translate\V3\GcsSource
     */
    public function getGcsSource()
    {
        return $this->readOneof(2);
    }

    /**
     * Required. Google Cloud Storage location for the source input.
     * This can be a single file (for example,
     * `gs://translation-test/input.tsv`) or a wildcard (for example,
     * `gs://translation-test/&#42;`). If a file extension is `.tsv`, it can
     * contain either one or two columns. The first column (optional) is the id
     * of the text request. If the first column is missing, we use the row
     * number (0-based) from the input file as the ID in the output file. The
     * second column is the actual text to be
     *  translated. We recommend each row be <= 10K Unicode codepoints,
     * otherwise an error might be returned.
     * Note that the input tsv must be RFC 4180 compliant.
     * You could use https://github.com/Clever/csvlint to check potential
     * formatting errors in your tsv file.
     * csvlint --delimiter='\t' your_input_file.tsv
     * The other supported file extensions are `.txt` or `.html`, which is
     * treated as a single large chunk of text.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.GcsSource gcs_source = 2;</code>
     * @param \Google\Cloud\Translate\V3\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\GcsSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

