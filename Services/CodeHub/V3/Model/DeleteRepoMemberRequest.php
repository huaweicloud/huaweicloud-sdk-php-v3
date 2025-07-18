<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteRepoMemberRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteRepoMemberRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * memberId  仓库成员id
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'memberId' => 'string',
            'repositoryUuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * memberId  仓库成员id
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'memberId' => null,
        'repositoryUuid' => null
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
    * memberId  仓库成员id
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'memberId' => 'member_id',
            'repositoryUuid' => 'repository_uuid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * memberId  仓库成员id
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    *
    * @var string[]
    */
    protected static $setters = [
            'memberId' => 'setMemberId',
            'repositoryUuid' => 'setRepositoryUuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * memberId  仓库成员id
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    *
    * @var string[]
    */
    protected static $getters = [
            'memberId' => 'getMemberId',
            'repositoryUuid' => 'getRepositoryUuid'
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
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['repositoryUuid'] = isset($data['repositoryUuid']) ? $data['repositoryUuid'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['memberId'] === null) {
            $invalidProperties[] = "'memberId' can't be null";
        }
        if ($this->container['repositoryUuid'] === null) {
            $invalidProperties[] = "'repositoryUuid' can't be null";
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
    * Gets memberId
    *  仓库成员id
    *
    * @return string
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string $memberId 仓库成员id
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
        return $this;
    }

    /**
    * Gets repositoryUuid
    *  仓库uuid(由CreateRepository接口返回)
    *
    * @return string
    */
    public function getRepositoryUuid()
    {
        return $this->container['repositoryUuid'];
    }

    /**
    * Sets repositoryUuid
    *
    * @param string $repositoryUuid 仓库uuid(由CreateRepository接口返回)
    *
    * @return $this
    */
    public function setRepositoryUuid($repositoryUuid)
    {
        $this->container['repositoryUuid'] = $repositoryUuid;
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

