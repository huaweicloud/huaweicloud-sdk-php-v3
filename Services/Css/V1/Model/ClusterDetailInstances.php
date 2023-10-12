<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterDetailInstances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterDetailInstances';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  节点状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * resourceId  该实例对应的资源Id。
    * type  当前节点的类型。
    * id  实例ID。
    * name  实例名字。
    * specCode  节点规格名称。
    * azCode  节点所属AZ信息。
    * ip  实例ip信息。
    * volume  volume
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'resourceId' => 'string',
            'type' => 'string',
            'id' => 'string',
            'name' => 'string',
            'specCode' => 'string',
            'azCode' => 'string',
            'ip' => 'string',
            'volume' => '\HuaweiCloud\SDK\Css\V1\Model\ShowClusterVolumeRsp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  节点状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * resourceId  该实例对应的资源Id。
    * type  当前节点的类型。
    * id  实例ID。
    * name  实例名字。
    * specCode  节点规格名称。
    * azCode  节点所属AZ信息。
    * ip  实例ip信息。
    * volume  volume
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'resourceId' => null,
        'type' => null,
        'id' => null,
        'name' => null,
        'specCode' => null,
        'azCode' => null,
        'ip' => null,
        'volume' => null
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
    * status  节点状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * resourceId  该实例对应的资源Id。
    * type  当前节点的类型。
    * id  实例ID。
    * name  实例名字。
    * specCode  节点规格名称。
    * azCode  节点所属AZ信息。
    * ip  实例ip信息。
    * volume  volume
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'resourceId' => 'resourceId',
            'type' => 'type',
            'id' => 'id',
            'name' => 'name',
            'specCode' => 'specCode',
            'azCode' => 'azCode',
            'ip' => 'ip',
            'volume' => 'volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  节点状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * resourceId  该实例对应的资源Id。
    * type  当前节点的类型。
    * id  实例ID。
    * name  实例名字。
    * specCode  节点规格名称。
    * azCode  节点所属AZ信息。
    * ip  实例ip信息。
    * volume  volume
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'resourceId' => 'setResourceId',
            'type' => 'setType',
            'id' => 'setId',
            'name' => 'setName',
            'specCode' => 'setSpecCode',
            'azCode' => 'setAzCode',
            'ip' => 'setIp',
            'volume' => 'setVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  节点状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    * resourceId  该实例对应的资源Id。
    * type  当前节点的类型。
    * id  实例ID。
    * name  实例名字。
    * specCode  节点规格名称。
    * azCode  节点所属AZ信息。
    * ip  实例ip信息。
    * volume  volume
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'resourceId' => 'getResourceId',
            'type' => 'getType',
            'id' => 'getId',
            'name' => 'getName',
            'specCode' => 'getSpecCode',
            'azCode' => 'getAzCode',
            'ip' => 'getIp',
            'volume' => 'getVolume'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && !preg_match("/ess/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /ess/.";
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
    * Gets status
    *  节点状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
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
    * @param string|null $status 节点状态值。  - 100：操作进行中，如创建中。 - 200：可用。 - 303：不可用，如创建失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets resourceId
    *  该实例对应的资源Id。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 该实例对应的资源Id。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets type
    *  当前节点的类型。
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
    * @param string|null $type 当前节点的类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  实例ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例ID。
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
    *  实例名字。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 实例名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets specCode
    *  节点规格名称。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 节点规格名称。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets azCode
    *  节点所属AZ信息。
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
    * @param string|null $azCode 节点所属AZ信息。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets ip
    *  实例ip信息。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 实例ip信息。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ShowClusterVolumeRsp|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ShowClusterVolumeRsp|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
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

