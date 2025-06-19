<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBranchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBranchRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branchId  分支URI
    * projectUuid  项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branchId' => 'string',
            'projectUuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branchId  分支URI
    * projectUuid  项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branchId' => null,
        'projectUuid' => null
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
    * branchId  分支URI
    * projectUuid  项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branchId' => 'branch_id',
            'projectUuid' => 'project_uuid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branchId  分支URI
    * projectUuid  项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'branchId' => 'setBranchId',
            'projectUuid' => 'setProjectUuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branchId  分支URI
    * projectUuid  项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'branchId' => 'getBranchId',
            'projectUuid' => 'getProjectUuid'
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
        $this->container['branchId'] = isset($data['branchId']) ? $data['branchId'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['branchId'] === null) {
            $invalidProperties[] = "'branchId' can't be null";
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
    * Gets branchId
    *  分支URI
    *
    * @return string
    */
    public function getBranchId()
    {
        return $this->container['branchId'];
    }

    /**
    * Sets branchId
    *
    * @param string $branchId 分支URI
    *
    * @return $this
    */
    public function setBranchId($branchId)
    {
        $this->container['branchId'] = $branchId;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目ID
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
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

