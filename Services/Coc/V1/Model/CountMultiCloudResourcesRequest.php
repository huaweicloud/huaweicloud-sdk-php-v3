<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountMultiCloudResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountMultiCloudResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vendor  **参数解释：** 云厂商类型。 **约束限制：** 不涉及。 **取值范围：** - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - HCS：Huawei Cloud Stack。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 用户选择的资源id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * nameList  **参数解释：** 资源名称。 **约束限制：** 不涉及。 **取值范围：** 列表，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionIdList  **参数解释：** 关联的区域region的id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vendor' => 'string',
            'type' => 'string',
            'resourceIdList' => 'string[]',
            'nameList' => 'string[]',
            'regionIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vendor  **参数解释：** 云厂商类型。 **约束限制：** 不涉及。 **取值范围：** - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - HCS：Huawei Cloud Stack。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 用户选择的资源id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * nameList  **参数解释：** 资源名称。 **约束限制：** 不涉及。 **取值范围：** 列表，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionIdList  **参数解释：** 关联的区域region的id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vendor' => null,
        'type' => null,
        'resourceIdList' => null,
        'nameList' => null,
        'regionIdList' => null
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
    * vendor  **参数解释：** 云厂商类型。 **约束限制：** 不涉及。 **取值范围：** - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - HCS：Huawei Cloud Stack。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 用户选择的资源id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * nameList  **参数解释：** 资源名称。 **约束限制：** 不涉及。 **取值范围：** 列表，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionIdList  **参数解释：** 关联的区域region的id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vendor' => 'vendor',
            'type' => 'type',
            'resourceIdList' => 'resource_id_list',
            'nameList' => 'name_list',
            'regionIdList' => 'region_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vendor  **参数解释：** 云厂商类型。 **约束限制：** 不涉及。 **取值范围：** - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - HCS：Huawei Cloud Stack。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 用户选择的资源id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * nameList  **参数解释：** 资源名称。 **约束限制：** 不涉及。 **取值范围：** 列表，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionIdList  **参数解释：** 关联的区域region的id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'vendor' => 'setVendor',
            'type' => 'setType',
            'resourceIdList' => 'setResourceIdList',
            'nameList' => 'setNameList',
            'regionIdList' => 'setRegionIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vendor  **参数解释：** 云厂商类型。 **约束限制：** 不涉及。 **取值范围：** - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - HCS：Huawei Cloud Stack。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 用户选择的资源id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * nameList  **参数解释：** 资源名称。 **约束限制：** 不涉及。 **取值范围：** 列表，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionIdList  **参数解释：** 关联的区域region的id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'vendor' => 'getVendor',
            'type' => 'getType',
            'resourceIdList' => 'getResourceIdList',
            'nameList' => 'getNameList',
            'regionIdList' => 'getRegionIdList'
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
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['resourceIdList'] = isset($data['resourceIdList']) ? $data['resourceIdList'] : null;
        $this->container['nameList'] = isset($data['nameList']) ? $data['nameList'] : null;
        $this->container['regionIdList'] = isset($data['regionIdList']) ? $data['regionIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
        }
            if ((mb_strlen($this->container['vendor']) > 50)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 50)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 50.";
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
    * Gets vendor
    *  **参数解释：** 云厂商类型。 **约束限制：** 不涉及。 **取值范围：** - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - HCS：Huawei Cloud Stack。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string $vendor **参数解释：** 云厂商类型。 **约束限制：** 不涉及。 **取值范围：** - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - HCS：Huawei Cloud Stack。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets resourceIdList
    *  **参数解释：** 用户选择的资源id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getResourceIdList()
    {
        return $this->container['resourceIdList'];
    }

    /**
    * Sets resourceIdList
    *
    * @param string[]|null $resourceIdList **参数解释：** 用户选择的资源id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setResourceIdList($resourceIdList)
    {
        $this->container['resourceIdList'] = $resourceIdList;
        return $this;
    }

    /**
    * Gets nameList
    *  **参数解释：** 资源名称。 **约束限制：** 不涉及。 **取值范围：** 列表，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getNameList()
    {
        return $this->container['nameList'];
    }

    /**
    * Sets nameList
    *
    * @param string[]|null $nameList **参数解释：** 资源名称。 **约束限制：** 不涉及。 **取值范围：** 列表，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNameList($nameList)
    {
        $this->container['nameList'] = $nameList;
        return $this;
    }

    /**
    * Gets regionIdList
    *  **参数解释：** 关联的区域region的id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getRegionIdList()
    {
        return $this->container['regionIdList'];
    }

    /**
    * Sets regionIdList
    *
    * @param string[]|null $regionIdList **参数解释：** 关联的区域region的id组成的列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRegionIdList($regionIdList)
    {
        $this->container['regionIdList'] = $regionIdList;
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

