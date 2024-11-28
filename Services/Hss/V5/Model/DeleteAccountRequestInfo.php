<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteAccountRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteAccountRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organizationId  组织Id
    * accountId  账号ID
    * projectId  租户项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organizationId' => 'string',
            'accountId' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organizationId  组织Id
    * accountId  账号ID
    * projectId  租户项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organizationId' => null,
        'accountId' => null,
        'projectId' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * organizationId  组织Id
    * accountId  账号ID
    * projectId  租户项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organizationId' => 'organization_id',
            'accountId' => 'account_id',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organizationId  组织Id
    * accountId  账号ID
    * projectId  租户项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'organizationId' => 'setOrganizationId',
            'accountId' => 'setAccountId',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organizationId  组织Id
    * accountId  账号ID
    * projectId  租户项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'organizationId' => 'getOrganizationId',
            'accountId' => 'getAccountId',
            'projectId' => 'getProjectId'
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
        return self::$openAPIModelName;
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['organizationId'] === null) {
            $invalidProperties[] = "'organizationId' can't be null";
        }
            if ((mb_strlen($this->container['organizationId']) > 128)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['organizationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['organizationId'])) {
                $invalidProperties[] = "invalid value for 'organizationId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
            if ((mb_strlen($this->container['accountId']) > 128)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['accountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^.*$/.";
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
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets organizationId
    *  组织Id
    *
    * @return string
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string $organizationId 组织Id
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets accountId
    *  账号ID
    *
    * @return string
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string $accountId 账号ID
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets projectId
    *  租户项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 租户项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

