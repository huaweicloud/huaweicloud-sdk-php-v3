<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListComputeResourceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListComputeResourceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourcePackageInfos  资源包信息列表。
    * total  总记录数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourcePackageInfos' => '\HuaweiCloud\SDK\Rds\V3\Model\ResourcePackageInfo[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourcePackageInfos  资源包信息列表。
    * total  总记录数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourcePackageInfos' => null,
        'total' => 'int32'
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
    * resourcePackageInfos  资源包信息列表。
    * total  总记录数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourcePackageInfos' => 'resource_package_infos',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourcePackageInfos  资源包信息列表。
    * total  总记录数。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourcePackageInfos' => 'setResourcePackageInfos',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourcePackageInfos  资源包信息列表。
    * total  总记录数。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourcePackageInfos' => 'getResourcePackageInfos',
            'total' => 'getTotal'
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
        $this->container['resourcePackageInfos'] = isset($data['resourcePackageInfos']) ? $data['resourcePackageInfos'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets resourcePackageInfos
    *  资源包信息列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ResourcePackageInfo[]|null
    */
    public function getResourcePackageInfos()
    {
        return $this->container['resourcePackageInfos'];
    }

    /**
    * Sets resourcePackageInfos
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ResourcePackageInfo[]|null $resourcePackageInfos 资源包信息列表。
    *
    * @return $this
    */
    public function setResourcePackageInfos($resourcePackageInfos)
    {
        $this->container['resourcePackageInfos'] = $resourcePackageInfos;
        return $this;
    }

    /**
    * Gets total
    *  总记录数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总记录数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

