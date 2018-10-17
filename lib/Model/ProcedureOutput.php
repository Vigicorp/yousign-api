<?php
/**
 * ProcedureOutput
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
 * ProcedureOutput Class Doc Comment
 *
 * @category Class
 * @package  YouSign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProcedureOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProcedureOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'expires_at' => '\DateTime',
        'status' => 'string',
        'creator' => 'string',
        'creator_first_name' => 'string',
        'creator_last_name' => 'string',
        'company' => 'string',
        'template' => 'bool',
        'ordered' => 'bool',
        'parent' => 'string',
        'metadata' => 'object',
        'config' => '\YouSign\Client\Model\ProcedureConfig',
        'members' => '\YouSign\Client\Model\MemberOutput[]',
        'files' => '\YouSign\Client\Model\FileOutput[]',
        'related_files_enable' => 'bool',
        'archive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'expires_at' => 'date-time',
        'status' => null,
        'creator' => null,
        'creator_first_name' => null,
        'creator_last_name' => null,
        'company' => null,
        'template' => null,
        'ordered' => null,
        'parent' => null,
        'metadata' => null,
        'config' => null,
        'members' => null,
        'files' => null,
        'related_files_enable' => null,
        'archive' => null
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
        'name' => 'name',
        'description' => 'description',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'expires_at' => 'expiresAt',
        'status' => 'status',
        'creator' => 'creator',
        'creator_first_name' => 'creatorFirstName',
        'creator_last_name' => 'creatorLastName',
        'company' => 'company',
        'template' => 'template',
        'ordered' => 'ordered',
        'parent' => 'parent',
        'metadata' => 'metadata',
        'config' => 'config',
        'members' => 'members',
        'files' => 'files',
        'related_files_enable' => 'relatedFilesEnable',
        'archive' => 'archive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'expires_at' => 'setExpiresAt',
        'status' => 'setStatus',
        'creator' => 'setCreator',
        'creator_first_name' => 'setCreatorFirstName',
        'creator_last_name' => 'setCreatorLastName',
        'company' => 'setCompany',
        'template' => 'setTemplate',
        'ordered' => 'setOrdered',
        'parent' => 'setParent',
        'metadata' => 'setMetadata',
        'config' => 'setConfig',
        'members' => 'setMembers',
        'files' => 'setFiles',
        'related_files_enable' => 'setRelatedFilesEnable',
        'archive' => 'setArchive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'expires_at' => 'getExpiresAt',
        'status' => 'getStatus',
        'creator' => 'getCreator',
        'creator_first_name' => 'getCreatorFirstName',
        'creator_last_name' => 'getCreatorLastName',
        'company' => 'getCompany',
        'template' => 'getTemplate',
        'ordered' => 'getOrdered',
        'parent' => 'getParent',
        'metadata' => 'getMetadata',
        'config' => 'getConfig',
        'members' => 'getMembers',
        'files' => 'getFiles',
        'related_files_enable' => 'getRelatedFilesEnable',
        'archive' => 'getArchive'
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

    const STATUS_DRAFT = 'draft';
    const STATUS_ACTIVE = 'active';
    const STATUS_FINISHED = 'finished';
    const STATUS_EXPIRED = 'expired';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_ACTIVE,
            self::STATUS_FINISHED,
            self::STATUS_EXPIRED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creator_first_name'] = isset($data['creator_first_name']) ? $data['creator_first_name'] : null;
        $this->container['creator_last_name'] = isset($data['creator_last_name']) ? $data['creator_last_name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['ordered'] = isset($data['ordered']) ? $data['ordered'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['related_files_enable'] = isset($data['related_files_enable']) ? $data['related_files_enable'] : null;
        $this->container['archive'] = isset($data['archive']) ? $data['archive'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && !preg_match("/^[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['creator']) && !preg_match("/^\/users\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['creator'])) {
            $invalidProperties[] = "invalid value for 'creator', must be conform to the pattern /^\/users\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.";
        }

        if (!is_null($this->container['company']) && !preg_match("/^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['company'])) {
            $invalidProperties[] = "invalid value for 'company', must be conform to the pattern /^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.";
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

        if (!preg_match("/^[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['id'])) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        if (!preg_match("/^\/users\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['creator'])) {
            return false;
        }
        if (!preg_match("/^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['company'])) {
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

        if (!is_null($id) && (!preg_match("/^[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling ProcedureOutput., must conform to the pattern /^[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of procedure
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of procedure
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets expires_at
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime $expires_at Expiration date. The procedure will be out of usage after this date.
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the procedure
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @param string $creator Id of creator of the object
     *
     * @return $this
     */
    public function setCreator($creator)
    {

        if (!is_null($creator) && (!preg_match("/^\/users\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $creator))) {
            throw new \InvalidArgumentException("invalid value for $creator when calling ProcedureOutput., must conform to the pattern /^\/users\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.");
        }

        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets creator_first_name
     *
     * @return string
     */
    public function getCreatorFirstName()
    {
        return $this->container['creator_first_name'];
    }

    /**
     * Sets creator_first_name
     *
     * @param string $creator_first_name The creator's first name
     *
     * @return $this
     */
    public function setCreatorFirstName($creator_first_name)
    {
        $this->container['creator_first_name'] = $creator_first_name;

        return $this;
    }

    /**
     * Gets creator_last_name
     *
     * @return string
     */
    public function getCreatorLastName()
    {
        return $this->container['creator_last_name'];
    }

    /**
     * Sets creator_last_name
     *
     * @param string $creator_last_name The creator's last name
     *
     * @return $this
     */
    public function setCreatorLastName($creator_last_name)
    {
        $this->container['creator_last_name'] = $creator_last_name;

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
     * @param string $company Id of company creator of the object
     *
     * @return $this
     */
    public function setCompany($company)
    {

        if (!is_null($company) && (!preg_match("/^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $company))) {
            throw new \InvalidArgumentException("invalid value for $company when calling ProcedureOutput., must conform to the pattern /^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.");
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets template
     *
     * @return bool
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param bool $template Defines if the procedure is a template (if true). A template could be used by a procedure to get all properties of the template. Check parent parameter for more information.
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets ordered
     *
     * @return bool
     */
    public function getOrdered()
    {
        return $this->container['ordered'];
    }

    /**
     * Sets ordered
     *
     * @param bool $ordered Defines an order for the procedure process. If true, position of each member will be used to define the validation workflow.
     *
     * @return $this
     */
    public function setOrdered($ordered)
    {
        $this->container['ordered'] = $ordered;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string $parent Id of a procedure template used to get all properties of the template in the new procedure. If you set other properties, they will be replaced. If you don’t set other properties, all properties will be cloned.
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata Metadata of the procedure
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \YouSign\Client\Model\ProcedureConfig
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \YouSign\Client\Model\ProcedureConfig $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets members
     *
     * @return \YouSign\Client\Model\MemberOutput[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     *
     * @param \YouSign\Client\Model\MemberOutput[] $members members
     *
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \YouSign\Client\Model\FileOutput[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \YouSign\Client\Model\FileOutput[] $files List of files used in the procedure.
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets related_files_enable
     *
     * @return bool
     */
    public function getRelatedFilesEnable()
    {
        return $this->container['related_files_enable'];
    }

    /**
     * Sets related_files_enable
     *
     * @param bool $related_files_enable Defines if related files are available.
     *
     * @return $this
     */
    public function setRelatedFilesEnable($related_files_enable)
    {
        $this->container['related_files_enable'] = $related_files_enable;

        return $this;
    }

    /**
     * Gets archive
     *
     * @return bool
     */
    public function getArchive()
    {
        return $this->container['archive'];
    }

    /**
     * Sets archive
     *
     * @param bool $archive Defines if the files of the procedure must be archived (Company should be allowed)
     *
     * @return $this
     */
    public function setArchive($archive)
    {
        $this->container['archive'] = $archive;

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


