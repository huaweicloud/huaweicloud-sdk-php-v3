<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageBlobRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageBlobRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryUuid  仓库id
    * branchName  分支名称
    * path  图片路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryUuid' => 'string',
            'branchName' => 'string',
            'path' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryUuid  仓库id
    * branchName  分支名称
    * path  图片路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryUuid' => null,
        'branchName' => null,
        'path' => null
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
    * repositoryUuid  仓库id
    * branchName  分支名称
    * path  图片路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryUuid' => 'repository_uuid',
            'branchName' => 'branch_name',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryUuid  仓库id
    * branchName  分支名称
    * path  图片路径
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryUuid' => 'setRepositoryUuid',
            'branchName' => 'setBranchName',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryUuid  仓库id
    * branchName  分支名称
    * path  图片路径
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryUuid' => 'getRepositoryUuid',
            'branchName' => 'getBranchName',
            'path' => 'getPath'
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
        $this->container['repositoryUuid'] = isset($data['repositoryUuid']) ? $data['repositoryUuid'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryUuid'] === null) {
            $invalidProperties[] = "'repositoryUuid' can't be null";
        }
        if ($this->container['branchName'] === null) {
            $invalidProperties[] = "'branchName' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
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
    * Gets repositoryUuid
    *  仓库id
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
    * @param string $repositoryUuid 仓库id
    *
    * @return $this
    */
    public function setRepositoryUuid($repositoryUuid)
    {
        $this->container['repositoryUuid'] = $repositoryUuid;
        return $this;
    }

    /**
    * Gets branchName
    *  分支名称
    *
    * @return string
    */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
    * Sets branchName
    *
    * @param string $branchName 分支名称
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets path
    *  图片路径
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 图片路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

