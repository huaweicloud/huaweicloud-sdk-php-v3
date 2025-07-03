<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchApplicationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchApplicationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appInfoList  组件列表。
    * appTotalCount  组件总数目。
    * appInfoMap  组件名称和组件详情map表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appInfoList' => '\HuaweiCloud\SDK\Apm\V1\Model\AppInfo[]',
            'appTotalCount' => 'int',
            'appInfoMap' => 'map[string,\HuaweiCloud\SDK\Apm\V1\Model\AppInfo]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appInfoList  组件列表。
    * appTotalCount  组件总数目。
    * appInfoMap  组件名称和组件详情map表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appInfoList' => null,
        'appTotalCount' => 'int32',
        'appInfoMap' => null
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
    * appInfoList  组件列表。
    * appTotalCount  组件总数目。
    * appInfoMap  组件名称和组件详情map表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appInfoList' => 'app_info_list',
            'appTotalCount' => 'app_total_count',
            'appInfoMap' => 'app_info_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appInfoList  组件列表。
    * appTotalCount  组件总数目。
    * appInfoMap  组件名称和组件详情map表。
    *
    * @var string[]
    */
    protected static $setters = [
            'appInfoList' => 'setAppInfoList',
            'appTotalCount' => 'setAppTotalCount',
            'appInfoMap' => 'setAppInfoMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appInfoList  组件列表。
    * appTotalCount  组件总数目。
    * appInfoMap  组件名称和组件详情map表。
    *
    * @var string[]
    */
    protected static $getters = [
            'appInfoList' => 'getAppInfoList',
            'appTotalCount' => 'getAppTotalCount',
            'appInfoMap' => 'getAppInfoMap'
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
        $this->container['appInfoList'] = isset($data['appInfoList']) ? $data['appInfoList'] : null;
        $this->container['appTotalCount'] = isset($data['appTotalCount']) ? $data['appTotalCount'] : null;
        $this->container['appInfoMap'] = isset($data['appInfoMap']) ? $data['appInfoMap'] : null;
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
    * Gets appInfoList
    *  组件列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\AppInfo[]|null
    */
    public function getAppInfoList()
    {
        return $this->container['appInfoList'];
    }

    /**
    * Sets appInfoList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\AppInfo[]|null $appInfoList 组件列表。
    *
    * @return $this
    */
    public function setAppInfoList($appInfoList)
    {
        $this->container['appInfoList'] = $appInfoList;
        return $this;
    }

    /**
    * Gets appTotalCount
    *  组件总数目。
    *
    * @return int|null
    */
    public function getAppTotalCount()
    {
        return $this->container['appTotalCount'];
    }

    /**
    * Sets appTotalCount
    *
    * @param int|null $appTotalCount 组件总数目。
    *
    * @return $this
    */
    public function setAppTotalCount($appTotalCount)
    {
        $this->container['appTotalCount'] = $appTotalCount;
        return $this;
    }

    /**
    * Gets appInfoMap
    *  组件名称和组件详情map表。
    *
    * @return map[string,\HuaweiCloud\SDK\Apm\V1\Model\AppInfo]|null
    */
    public function getAppInfoMap()
    {
        return $this->container['appInfoMap'];
    }

    /**
    * Sets appInfoMap
    *
    * @param map[string,\HuaweiCloud\SDK\Apm\V1\Model\AppInfo]|null $appInfoMap 组件名称和组件详情map表。
    *
    * @return $this
    */
    public function setAppInfoMap($appInfoMap)
    {
        $this->container['appInfoMap'] = $appInfoMap;
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

