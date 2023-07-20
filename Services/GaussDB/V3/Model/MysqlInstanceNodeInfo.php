<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlInstanceNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlInstanceNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  节点名称。
    * type  节点类型，master或slave。
    * status  节点状态。
    * port  数据库端口号。
    * privateReadIps  节点的读内网地址。
    * volume  volume
    * azCode  可用区。
    * regionCode  实例所在的区域。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * flavorId  规格ID。
    * flavorRef  规格码。
    * maxConnections  允许的最大连接数。
    * vcpus  CPU核数。
    * ram  内存大小，单位为GB。
    * needRestart  是否需要重启使修改的参数生效。
    * priority  主备倒换优先级。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'status' => 'string',
            'port' => 'int',
            'privateReadIps' => 'string[]',
            'volume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceNodeVolumeInfo',
            'azCode' => 'string',
            'regionCode' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'flavorId' => 'string',
            'flavorRef' => 'string',
            'maxConnections' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'needRestart' => 'bool',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  节点名称。
    * type  节点类型，master或slave。
    * status  节点状态。
    * port  数据库端口号。
    * privateReadIps  节点的读内网地址。
    * volume  volume
    * azCode  可用区。
    * regionCode  实例所在的区域。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * flavorId  规格ID。
    * flavorRef  规格码。
    * maxConnections  允许的最大连接数。
    * vcpus  CPU核数。
    * ram  内存大小，单位为GB。
    * needRestart  是否需要重启使修改的参数生效。
    * priority  主备倒换优先级。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'status' => null,
        'port' => 'int32',
        'privateReadIps' => null,
        'volume' => null,
        'azCode' => null,
        'regionCode' => null,
        'created' => null,
        'updated' => null,
        'flavorId' => null,
        'flavorRef' => null,
        'maxConnections' => null,
        'vcpus' => null,
        'ram' => null,
        'needRestart' => null,
        'priority' => 'int32'
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
    * id  实例ID。
    * name  节点名称。
    * type  节点类型，master或slave。
    * status  节点状态。
    * port  数据库端口号。
    * privateReadIps  节点的读内网地址。
    * volume  volume
    * azCode  可用区。
    * regionCode  实例所在的区域。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * flavorId  规格ID。
    * flavorRef  规格码。
    * maxConnections  允许的最大连接数。
    * vcpus  CPU核数。
    * ram  内存大小，单位为GB。
    * needRestart  是否需要重启使修改的参数生效。
    * priority  主备倒换优先级。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'status' => 'status',
            'port' => 'port',
            'privateReadIps' => 'private_read_ips',
            'volume' => 'volume',
            'azCode' => 'az_code',
            'regionCode' => 'region_code',
            'created' => 'created',
            'updated' => 'updated',
            'flavorId' => 'flavor_id',
            'flavorRef' => 'flavor_ref',
            'maxConnections' => 'max_connections',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'needRestart' => 'need_restart',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  节点名称。
    * type  节点类型，master或slave。
    * status  节点状态。
    * port  数据库端口号。
    * privateReadIps  节点的读内网地址。
    * volume  volume
    * azCode  可用区。
    * regionCode  实例所在的区域。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * flavorId  规格ID。
    * flavorRef  规格码。
    * maxConnections  允许的最大连接数。
    * vcpus  CPU核数。
    * ram  内存大小，单位为GB。
    * needRestart  是否需要重启使修改的参数生效。
    * priority  主备倒换优先级。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'status' => 'setStatus',
            'port' => 'setPort',
            'privateReadIps' => 'setPrivateReadIps',
            'volume' => 'setVolume',
            'azCode' => 'setAzCode',
            'regionCode' => 'setRegionCode',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'flavorId' => 'setFlavorId',
            'flavorRef' => 'setFlavorRef',
            'maxConnections' => 'setMaxConnections',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'needRestart' => 'setNeedRestart',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  节点名称。
    * type  节点类型，master或slave。
    * status  节点状态。
    * port  数据库端口号。
    * privateReadIps  节点的读内网地址。
    * volume  volume
    * azCode  可用区。
    * regionCode  实例所在的区域。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * flavorId  规格ID。
    * flavorRef  规格码。
    * maxConnections  允许的最大连接数。
    * vcpus  CPU核数。
    * ram  内存大小，单位为GB。
    * needRestart  是否需要重启使修改的参数生效。
    * priority  主备倒换优先级。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'status' => 'getStatus',
            'port' => 'getPort',
            'privateReadIps' => 'getPrivateReadIps',
            'volume' => 'getVolume',
            'azCode' => 'getAzCode',
            'regionCode' => 'getRegionCode',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'flavorId' => 'getFlavorId',
            'flavorRef' => 'getFlavorRef',
            'maxConnections' => 'getMaxConnections',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'needRestart' => 'getNeedRestart',
            'priority' => 'getPriority'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['privateReadIps'] = isset($data['privateReadIps']) ? $data['privateReadIps'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['maxConnections'] = isset($data['maxConnections']) ? $data['maxConnections'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['needRestart'] = isset($data['needRestart']) ? $data['needRestart'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets id
    *  实例ID。
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
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  节点名称。
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
    * @param string $name 节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  节点类型，master或slave。
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
    * @param string|null $type 节点类型，master或slave。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  节点状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 节点状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口号。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 数据库端口号。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets privateReadIps
    *  节点的读内网地址。
    *
    * @return string[]|null
    */
    public function getPrivateReadIps()
    {
        return $this->container['privateReadIps'];
    }

    /**
    * Sets privateReadIps
    *
    * @param string[]|null $privateReadIps 节点的读内网地址。
    *
    * @return $this
    */
    public function setPrivateReadIps($privateReadIps)
    {
        $this->container['privateReadIps'] = $privateReadIps;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceNodeVolumeInfo|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceNodeVolumeInfo|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets regionCode
    *  实例所在的区域。
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode 实例所在的区域。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间，格式与\"created\"字段对应格式完全相同。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间，格式与\"created\"字段对应格式完全相同。说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets flavorId
    *  规格ID。
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 规格ID。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码。
    *
    * @return string|null
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string|null $flavorRef 规格码。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets maxConnections
    *  允许的最大连接数。
    *
    * @return string|null
    */
    public function getMaxConnections()
    {
        return $this->container['maxConnections'];
    }

    /**
    * Sets maxConnections
    *
    * @param string|null $maxConnections 允许的最大连接数。
    *
    * @return $this
    */
    public function setMaxConnections($maxConnections)
    {
        $this->container['maxConnections'] = $maxConnections;
        return $this;
    }

    /**
    * Gets vcpus
    *  CPU核数。
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus CPU核数。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小，单位为GB。
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram 内存大小，单位为GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets needRestart
    *  是否需要重启使修改的参数生效。
    *
    * @return bool|null
    */
    public function getNeedRestart()
    {
        return $this->container['needRestart'];
    }

    /**
    * Sets needRestart
    *
    * @param bool|null $needRestart 是否需要重启使修改的参数生效。
    *
    * @return $this
    */
    public function setNeedRestart($needRestart)
    {
        $this->container['needRestart'] = $needRestart;
        return $this;
    }

    /**
    * Gets priority
    *  主备倒换优先级。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 主备倒换优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

