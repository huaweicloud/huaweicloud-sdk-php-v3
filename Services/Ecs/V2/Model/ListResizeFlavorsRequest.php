<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResizeFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResizeFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceUuid  进行规格切换的云服务器ID，UUID格式。
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    * sortDir  升序/降序排序，默认值为：asc。  取值范围：  - asc：表示升序。 - desc：表示降序
    * sortKey  排序字段。  key的取值范围：  - flavorid：表示规格ID。 - sort_key的默认值为“flavorid”。 - name：表示规格名称。 - memory_mb：表示内存大小。 - vcpus：表示CPU大小。 - root_gb：表示系统盘大小。
    * sourceFlavorId  进行规格切换的云服务器源规格ID。
    * sourceFlavorName  进行规格切换的云服务器源规格名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceUuid' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'sortDir' => 'string',
            'sortKey' => 'string',
            'sourceFlavorId' => 'string',
            'sourceFlavorName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceUuid  进行规格切换的云服务器ID，UUID格式。
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    * sortDir  升序/降序排序，默认值为：asc。  取值范围：  - asc：表示升序。 - desc：表示降序
    * sortKey  排序字段。  key的取值范围：  - flavorid：表示规格ID。 - sort_key的默认值为“flavorid”。 - name：表示规格名称。 - memory_mb：表示内存大小。 - vcpus：表示CPU大小。 - root_gb：表示系统盘大小。
    * sourceFlavorId  进行规格切换的云服务器源规格ID。
    * sourceFlavorName  进行规格切换的云服务器源规格名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceUuid' => null,
        'limit' => 'int32',
        'marker' => null,
        'sortDir' => null,
        'sortKey' => null,
        'sourceFlavorId' => null,
        'sourceFlavorName' => null
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
    * instanceUuid  进行规格切换的云服务器ID，UUID格式。
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    * sortDir  升序/降序排序，默认值为：asc。  取值范围：  - asc：表示升序。 - desc：表示降序
    * sortKey  排序字段。  key的取值范围：  - flavorid：表示规格ID。 - sort_key的默认值为“flavorid”。 - name：表示规格名称。 - memory_mb：表示内存大小。 - vcpus：表示CPU大小。 - root_gb：表示系统盘大小。
    * sourceFlavorId  进行规格切换的云服务器源规格ID。
    * sourceFlavorName  进行规格切换的云服务器源规格名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceUuid' => 'instance_uuid',
            'limit' => 'limit',
            'marker' => 'marker',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'sourceFlavorId' => 'source_flavor_id',
            'sourceFlavorName' => 'source_flavor_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceUuid  进行规格切换的云服务器ID，UUID格式。
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    * sortDir  升序/降序排序，默认值为：asc。  取值范围：  - asc：表示升序。 - desc：表示降序
    * sortKey  排序字段。  key的取值范围：  - flavorid：表示规格ID。 - sort_key的默认值为“flavorid”。 - name：表示规格名称。 - memory_mb：表示内存大小。 - vcpus：表示CPU大小。 - root_gb：表示系统盘大小。
    * sourceFlavorId  进行规格切换的云服务器源规格ID。
    * sourceFlavorName  进行规格切换的云服务器源规格名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceUuid' => 'setInstanceUuid',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'sourceFlavorId' => 'setSourceFlavorId',
            'sourceFlavorName' => 'setSourceFlavorName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceUuid  进行规格切换的云服务器ID，UUID格式。
    * limit  单页面可显示的flavor条数最大值，默认是1000。
    * marker  以单页最后一条flavor的ID作为分页标记。
    * sortDir  升序/降序排序，默认值为：asc。  取值范围：  - asc：表示升序。 - desc：表示降序
    * sortKey  排序字段。  key的取值范围：  - flavorid：表示规格ID。 - sort_key的默认值为“flavorid”。 - name：表示规格名称。 - memory_mb：表示内存大小。 - vcpus：表示CPU大小。 - root_gb：表示系统盘大小。
    * sourceFlavorId  进行规格切换的云服务器源规格ID。
    * sourceFlavorName  进行规格切换的云服务器源规格名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceUuid' => 'getInstanceUuid',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'sourceFlavorId' => 'getSourceFlavorId',
            'sourceFlavorName' => 'getSourceFlavorName'
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
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    const SORT_KEY_FLAVORID = 'flavorid';
    const SORT_KEY_SORT_KEY = 'sort_key';
    const SORT_KEY_NAME = 'name';
    const SORT_KEY_MEMORY_MB = 'memory_mb';
    const SORT_KEY_VCPUS = 'vcpus';
    const SORT_KEY_ROOT_GB = 'root_gb';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_FLAVORID,
            self::SORT_KEY_SORT_KEY,
            self::SORT_KEY_NAME,
            self::SORT_KEY_MEMORY_MB,
            self::SORT_KEY_VCPUS,
            self::SORT_KEY_ROOT_GB,
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
        $this->container['instanceUuid'] = isset($data['instanceUuid']) ? $data['instanceUuid'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 1000;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : 'asc';
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : 'flavorid';
        $this->container['sourceFlavorId'] = isset($data['sourceFlavorId']) ? $data['sourceFlavorId'] : null;
        $this->container['sourceFlavorName'] = isset($data['sourceFlavorName']) ? $data['sourceFlavorName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets instanceUuid
    *  进行规格切换的云服务器ID，UUID格式。
    *
    * @return string|null
    */
    public function getInstanceUuid()
    {
        return $this->container['instanceUuid'];
    }

    /**
    * Sets instanceUuid
    *
    * @param string|null $instanceUuid 进行规格切换的云服务器ID，UUID格式。
    *
    * @return $this
    */
    public function setInstanceUuid($instanceUuid)
    {
        $this->container['instanceUuid'] = $instanceUuid;
        return $this;
    }

    /**
    * Gets limit
    *  单页面可显示的flavor条数最大值，默认是1000。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 单页面可显示的flavor条数最大值，默认是1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  以单页最后一条flavor的ID作为分页标记。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 以单页最后一条flavor的ID作为分页标记。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets sortDir
    *  升序/降序排序，默认值为：asc。  取值范围：  - asc：表示升序。 - desc：表示降序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 升序/降序排序，默认值为：asc。  取值范围：  - asc：表示升序。 - desc：表示降序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段。  key的取值范围：  - flavorid：表示规格ID。 - sort_key的默认值为“flavorid”。 - name：表示规格名称。 - memory_mb：表示内存大小。 - vcpus：表示CPU大小。 - root_gb：表示系统盘大小。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段。  key的取值范围：  - flavorid：表示规格ID。 - sort_key的默认值为“flavorid”。 - name：表示规格名称。 - memory_mb：表示内存大小。 - vcpus：表示CPU大小。 - root_gb：表示系统盘大小。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sourceFlavorId
    *  进行规格切换的云服务器源规格ID。
    *
    * @return string|null
    */
    public function getSourceFlavorId()
    {
        return $this->container['sourceFlavorId'];
    }

    /**
    * Sets sourceFlavorId
    *
    * @param string|null $sourceFlavorId 进行规格切换的云服务器源规格ID。
    *
    * @return $this
    */
    public function setSourceFlavorId($sourceFlavorId)
    {
        $this->container['sourceFlavorId'] = $sourceFlavorId;
        return $this;
    }

    /**
    * Gets sourceFlavorName
    *  进行规格切换的云服务器源规格名称。
    *
    * @return string|null
    */
    public function getSourceFlavorName()
    {
        return $this->container['sourceFlavorName'];
    }

    /**
    * Sets sourceFlavorName
    *
    * @param string|null $sourceFlavorName 进行规格切换的云服务器源规格名称。
    *
    * @return $this
    */
    public function setSourceFlavorName($sourceFlavorName)
    {
        $this->container['sourceFlavorName'] = $sourceFlavorName;
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

