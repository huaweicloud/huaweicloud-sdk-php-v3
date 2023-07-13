<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceExtraInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceExtraInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * excludeVolumes  需要排除备份的卷id。仅在多系统盘备份特性中有效，排除不需要备份的磁盘。当虚拟机新绑定磁盘时，也能继续排除之前设置不用备份的卷。
    * includeVolumes  指定需要备份的卷,若有指定值，则每次备份都只备份指定的卷，如虚拟机绑定存储库之后新绑定的卷不会备份；若为空默认为资源全部卷；仅虚拟机磁盘级备份特性中有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'excludeVolumes' => 'string[]',
            'includeVolumes' => '\HuaweiCloud\SDK\Cbr\V1\Model\ResourceExtraInfoIncludeVolumes[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * excludeVolumes  需要排除备份的卷id。仅在多系统盘备份特性中有效，排除不需要备份的磁盘。当虚拟机新绑定磁盘时，也能继续排除之前设置不用备份的卷。
    * includeVolumes  指定需要备份的卷,若有指定值，则每次备份都只备份指定的卷，如虚拟机绑定存储库之后新绑定的卷不会备份；若为空默认为资源全部卷；仅虚拟机磁盘级备份特性中有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'excludeVolumes' => null,
        'includeVolumes' => null
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
    * excludeVolumes  需要排除备份的卷id。仅在多系统盘备份特性中有效，排除不需要备份的磁盘。当虚拟机新绑定磁盘时，也能继续排除之前设置不用备份的卷。
    * includeVolumes  指定需要备份的卷,若有指定值，则每次备份都只备份指定的卷，如虚拟机绑定存储库之后新绑定的卷不会备份；若为空默认为资源全部卷；仅虚拟机磁盘级备份特性中有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'excludeVolumes' => 'exclude_volumes',
            'includeVolumes' => 'include_volumes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * excludeVolumes  需要排除备份的卷id。仅在多系统盘备份特性中有效，排除不需要备份的磁盘。当虚拟机新绑定磁盘时，也能继续排除之前设置不用备份的卷。
    * includeVolumes  指定需要备份的卷,若有指定值，则每次备份都只备份指定的卷，如虚拟机绑定存储库之后新绑定的卷不会备份；若为空默认为资源全部卷；仅虚拟机磁盘级备份特性中有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'excludeVolumes' => 'setExcludeVolumes',
            'includeVolumes' => 'setIncludeVolumes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * excludeVolumes  需要排除备份的卷id。仅在多系统盘备份特性中有效，排除不需要备份的磁盘。当虚拟机新绑定磁盘时，也能继续排除之前设置不用备份的卷。
    * includeVolumes  指定需要备份的卷,若有指定值，则每次备份都只备份指定的卷，如虚拟机绑定存储库之后新绑定的卷不会备份；若为空默认为资源全部卷；仅虚拟机磁盘级备份特性中有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'excludeVolumes' => 'getExcludeVolumes',
            'includeVolumes' => 'getIncludeVolumes'
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
        $this->container['excludeVolumes'] = isset($data['excludeVolumes']) ? $data['excludeVolumes'] : null;
        $this->container['includeVolumes'] = isset($data['includeVolumes']) ? $data['includeVolumes'] : null;
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
    * Gets excludeVolumes
    *  需要排除备份的卷id。仅在多系统盘备份特性中有效，排除不需要备份的磁盘。当虚拟机新绑定磁盘时，也能继续排除之前设置不用备份的卷。
    *
    * @return string[]|null
    */
    public function getExcludeVolumes()
    {
        return $this->container['excludeVolumes'];
    }

    /**
    * Sets excludeVolumes
    *
    * @param string[]|null $excludeVolumes 需要排除备份的卷id。仅在多系统盘备份特性中有效，排除不需要备份的磁盘。当虚拟机新绑定磁盘时，也能继续排除之前设置不用备份的卷。
    *
    * @return $this
    */
    public function setExcludeVolumes($excludeVolumes)
    {
        $this->container['excludeVolumes'] = $excludeVolumes;
        return $this;
    }

    /**
    * Gets includeVolumes
    *  指定需要备份的卷,若有指定值，则每次备份都只备份指定的卷，如虚拟机绑定存储库之后新绑定的卷不会备份；若为空默认为资源全部卷；仅虚拟机磁盘级备份特性中有效。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\ResourceExtraInfoIncludeVolumes[]|null
    */
    public function getIncludeVolumes()
    {
        return $this->container['includeVolumes'];
    }

    /**
    * Sets includeVolumes
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\ResourceExtraInfoIncludeVolumes[]|null $includeVolumes 指定需要备份的卷,若有指定值，则每次备份都只备份指定的卷，如虚拟机绑定存储库之后新绑定的卷不会备份；若为空默认为资源全部卷；仅虚拟机磁盘级备份特性中有效。
    *
    * @return $this
    */
    public function setIncludeVolumes($includeVolumes)
    {
        $this->container['includeVolumes'] = $includeVolumes;
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

