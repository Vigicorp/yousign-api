<?php
/**
 * CheckDocumentIdentitiesOutput
 *
 * PHP version 5
 *
 * @category Class
 * @package  YouSign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Yousign API Swagger
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * Contact: support@yousign.fr
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YouSign\Client\Model;

use \ArrayAccess;
use \YouSign\Client\ObjectSerializer;

/**
 * CheckDocumentIdentitiesOutput Class Doc Comment
 *
 * @category Class
 * @package  YouSign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckDocumentIdentitiesOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckDocumentIdentitiesOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'first_names' => 'string[]',
        'birth_name' => 'string',
        'birth_date' => '\DateTime',
        'company' => 'string',
        'creator' => 'string',
        'document_type' => 'string',
        'extracted_first_names' => 'string[]',
        'extracted_birth_name' => 'string',
        'extracted_birth_date' => '\DateTime',
        'extracted_gender' => 'string',
        'extracted_issuance_date' => '\DateTime',
        'extracted_expiration_date' => '\DateTime',
        'extracted_mrz' => 'string[]',
        'first_name_valid' => 'bool',
        'birth_name_valid' => 'bool',
        'mrz_valid' => 'bool',
        'expired' => 'bool',
        'valid' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'first_names' => null,
        'birth_name' => null,
        'birth_date' => 'date',
        'company' => null,
        'creator' => null,
        'document_type' => null,
        'extracted_first_names' => null,
        'extracted_birth_name' => null,
        'extracted_birth_date' => 'date',
        'extracted_gender' => null,
        'extracted_issuance_date' => 'date',
        'extracted_expiration_date' => 'date',
        'extracted_mrz' => null,
        'first_name_valid' => null,
        'birth_name_valid' => null,
        'mrz_valid' => null,
        'expired' => null,
        'valid' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'first_names' => 'firstNames',
        'birth_name' => 'birthName',
        'birth_date' => 'birthDate',
        'company' => 'company',
        'creator' => 'creator',
        'document_type' => 'documentType',
        'extracted_first_names' => 'extractedFirstNames',
        'extracted_birth_name' => 'extractedBirthName',
        'extracted_birth_date' => 'extractedBirthDate',
        'extracted_gender' => 'extractedGender',
        'extracted_issuance_date' => 'extractedIssuanceDate',
        'extracted_expiration_date' => 'extractedExpirationDate',
        'extracted_mrz' => 'extractedMrz',
        'first_name_valid' => 'firstNameValid',
        'birth_name_valid' => 'birthNameValid',
        'mrz_valid' => 'mrzValid',
        'expired' => 'expired',
        'valid' => 'valid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'first_names' => 'setFirstNames',
        'birth_name' => 'setBirthName',
        'birth_date' => 'setBirthDate',
        'company' => 'setCompany',
        'creator' => 'setCreator',
        'document_type' => 'setDocumentType',
        'extracted_first_names' => 'setExtractedFirstNames',
        'extracted_birth_name' => 'setExtractedBirthName',
        'extracted_birth_date' => 'setExtractedBirthDate',
        'extracted_gender' => 'setExtractedGender',
        'extracted_issuance_date' => 'setExtractedIssuanceDate',
        'extracted_expiration_date' => 'setExtractedExpirationDate',
        'extracted_mrz' => 'setExtractedMrz',
        'first_name_valid' => 'setFirstNameValid',
        'birth_name_valid' => 'setBirthNameValid',
        'mrz_valid' => 'setMrzValid',
        'expired' => 'setExpired',
        'valid' => 'setValid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'first_names' => 'getFirstNames',
        'birth_name' => 'getBirthName',
        'birth_date' => 'getBirthDate',
        'company' => 'getCompany',
        'creator' => 'getCreator',
        'document_type' => 'getDocumentType',
        'extracted_first_names' => 'getExtractedFirstNames',
        'extracted_birth_name' => 'getExtractedBirthName',
        'extracted_birth_date' => 'getExtractedBirthDate',
        'extracted_gender' => 'getExtractedGender',
        'extracted_issuance_date' => 'getExtractedIssuanceDate',
        'extracted_expiration_date' => 'getExtractedExpirationDate',
        'extracted_mrz' => 'getExtractedMrz',
        'first_name_valid' => 'getFirstNameValid',
        'birth_name_valid' => 'getBirthNameValid',
        'mrz_valid' => 'getMrzValid',
        'expired' => 'getExpired',
        'valid' => 'getValid'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const DOCUMENT_TYPE_ID_CARD = 'ID_CARD';
    const DOCUMENT_TYPE_PASSPORT = 'PASSPORT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_ID_CARD,
            self::DOCUMENT_TYPE_PASSPORT,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['first_names'] = isset($data['first_names']) ? $data['first_names'] : null;
        $this->container['birth_name'] = isset($data['birth_name']) ? $data['birth_name'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['extracted_first_names'] = isset($data['extracted_first_names']) ? $data['extracted_first_names'] : null;
        $this->container['extracted_birth_name'] = isset($data['extracted_birth_name']) ? $data['extracted_birth_name'] : null;
        $this->container['extracted_birth_date'] = isset($data['extracted_birth_date']) ? $data['extracted_birth_date'] : null;
        $this->container['extracted_gender'] = isset($data['extracted_gender']) ? $data['extracted_gender'] : null;
        $this->container['extracted_issuance_date'] = isset($data['extracted_issuance_date']) ? $data['extracted_issuance_date'] : null;
        $this->container['extracted_expiration_date'] = isset($data['extracted_expiration_date']) ? $data['extracted_expiration_date'] : null;
        $this->container['extracted_mrz'] = isset($data['extracted_mrz']) ? $data['extracted_mrz'] : null;
        $this->container['first_name_valid'] = isset($data['first_name_valid']) ? $data['first_name_valid'] : null;
        $this->container['birth_name_valid'] = isset($data['birth_name_valid']) ? $data['birth_name_valid'] : null;
        $this->container['mrz_valid'] = isset($data['mrz_valid']) ? $data['mrz_valid'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['valid'] = isset($data['valid']) ? $data['valid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && !preg_match("/^\/check-document\/identities\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^\/check-document\/identities\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.";
        }

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($this->container['document_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (!preg_match("/^\/check-document\/identities\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['id'])) {
            return false;
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($this->container['document_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Id of the object
     *
     * @return $this
     */
    public function setId($id)
    {

        if (!is_null($id) && (!preg_match("/^\/check-document\/identities\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling CheckDocumentIdentitiesOutput., must conform to the pattern /^\/check-document\/identities\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Created date of the object
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Updated date of the object
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets first_names
     *
     * @return string[]
     */
    public function getFirstNames()
    {
        return $this->container['first_names'];
    }

    /**
     * Sets first_names
     *
     * @param string[] $first_names List of firstnames to check on document
     *
     * @return $this
     */
    public function setFirstNames($first_names)
    {
        $this->container['first_names'] = $first_names;

        return $this;
    }

    /**
     * Gets birth_name
     *
     * @return string
     */
    public function getBirthName()
    {
        return $this->container['birth_name'];
    }

    /**
     * Sets birth_name
     *
     * @param string $birth_name Birth name to check on document
     *
     * @return $this
     */
    public function setBirthName($birth_name)
    {
        $this->container['birth_name'] = $birth_name;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime $birth_date Birth date to check on document
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company Company creator of the object
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator Creator of the object
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type Type of document
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($document_type) && !in_array($document_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets extracted_first_names
     *
     * @return string[]
     */
    public function getExtractedFirstNames()
    {
        return $this->container['extracted_first_names'];
    }

    /**
     * Sets extracted_first_names
     *
     * @param string[] $extracted_first_names Extracted firstnames on the document
     *
     * @return $this
     */
    public function setExtractedFirstNames($extracted_first_names)
    {
        $this->container['extracted_first_names'] = $extracted_first_names;

        return $this;
    }

    /**
     * Gets extracted_birth_name
     *
     * @return string
     */
    public function getExtractedBirthName()
    {
        return $this->container['extracted_birth_name'];
    }

    /**
     * Sets extracted_birth_name
     *
     * @param string $extracted_birth_name Extracted birth name on the document
     *
     * @return $this
     */
    public function setExtractedBirthName($extracted_birth_name)
    {
        $this->container['extracted_birth_name'] = $extracted_birth_name;

        return $this;
    }

    /**
     * Gets extracted_birth_date
     *
     * @return \DateTime
     */
    public function getExtractedBirthDate()
    {
        return $this->container['extracted_birth_date'];
    }

    /**
     * Sets extracted_birth_date
     *
     * @param \DateTime $extracted_birth_date Extracted birth date on the document
     *
     * @return $this
     */
    public function setExtractedBirthDate($extracted_birth_date)
    {
        $this->container['extracted_birth_date'] = $extracted_birth_date;

        return $this;
    }

    /**
     * Gets extracted_gender
     *
     * @return string
     */
    public function getExtractedGender()
    {
        return $this->container['extracted_gender'];
    }

    /**
     * Sets extracted_gender
     *
     * @param string $extracted_gender Extracted gender on the document
     *
     * @return $this
     */
    public function setExtractedGender($extracted_gender)
    {
        $this->container['extracted_gender'] = $extracted_gender;

        return $this;
    }

    /**
     * Gets extracted_issuance_date
     *
     * @return \DateTime
     */
    public function getExtractedIssuanceDate()
    {
        return $this->container['extracted_issuance_date'];
    }

    /**
     * Sets extracted_issuance_date
     *
     * @param \DateTime $extracted_issuance_date Extracted issuance date on the document
     *
     * @return $this
     */
    public function setExtractedIssuanceDate($extracted_issuance_date)
    {
        $this->container['extracted_issuance_date'] = $extracted_issuance_date;

        return $this;
    }

    /**
     * Gets extracted_expiration_date
     *
     * @return \DateTime
     */
    public function getExtractedExpirationDate()
    {
        return $this->container['extracted_expiration_date'];
    }

    /**
     * Sets extracted_expiration_date
     *
     * @param \DateTime $extracted_expiration_date Extracted expiration date on the document
     *
     * @return $this
     */
    public function setExtractedExpirationDate($extracted_expiration_date)
    {
        $this->container['extracted_expiration_date'] = $extracted_expiration_date;

        return $this;
    }

    /**
     * Gets extracted_mrz
     *
     * @return string[]
     */
    public function getExtractedMrz()
    {
        return $this->container['extracted_mrz'];
    }

    /**
     * Sets extracted_mrz
     *
     * @param string[] $extracted_mrz Extracted MRZ on the document
     *
     * @return $this
     */
    public function setExtractedMrz($extracted_mrz)
    {
        $this->container['extracted_mrz'] = $extracted_mrz;

        return $this;
    }

    /**
     * Gets first_name_valid
     *
     * @return bool
     */
    public function getFirstNameValid()
    {
        return $this->container['first_name_valid'];
    }

    /**
     * Sets first_name_valid
     *
     * @param bool $first_name_valid Defines if one firstname sent in the input is valid
     *
     * @return $this
     */
    public function setFirstNameValid($first_name_valid)
    {
        $this->container['first_name_valid'] = $first_name_valid;

        return $this;
    }

    /**
     * Gets birth_name_valid
     *
     * @return bool
     */
    public function getBirthNameValid()
    {
        return $this->container['birth_name_valid'];
    }

    /**
     * Sets birth_name_valid
     *
     * @param bool $birth_name_valid Defines if birth name sent in the input is valid
     *
     * @return $this
     */
    public function setBirthNameValid($birth_name_valid)
    {
        $this->container['birth_name_valid'] = $birth_name_valid;

        return $this;
    }

    /**
     * Gets mrz_valid
     *
     * @return bool
     */
    public function getMrzValid()
    {
        return $this->container['mrz_valid'];
    }

    /**
     * Sets mrz_valid
     *
     * @param bool $mrz_valid Defines if MRZ sent in the input is valid
     *
     * @return $this
     */
    public function setMrzValid($mrz_valid)
    {
        $this->container['mrz_valid'] = $mrz_valid;

        return $this;
    }

    /**
     * Gets expired
     *
     * @return bool
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param bool $expired Defines if the document is expired
     *
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets valid
     *
     * @return bool
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param bool $valid Defines if the document is valid
     *
     * @return $this
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


