<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Line implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'line';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineId  解析线路ID。
    * name  解析线路名称。
    * ipSegments  IP地址段。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * description  自定义线路的描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineId' => 'string',
            'name' => 'string',
            'ipSegments' => 'string[]',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'status' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineId  解析线路ID。
    * name  解析线路名称。
    * ipSegments  IP地址段。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * description  自定义线路的描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineId' => null,
        'name' => null,
        'ipSegments' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'status' => null,
        'description' => null
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
    * lineId  解析线路ID。
    * name  解析线路名称。
    * ipSegments  IP地址段。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * description  自定义线路的描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineId' => 'line_id',
            'name' => 'name',
            'ipSegments' => 'ip_segments',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'status' => 'status',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineId  解析线路ID。
    * name  解析线路名称。
    * ipSegments  IP地址段。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * description  自定义线路的描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'lineId' => 'setLineId',
            'name' => 'setName',
            'ipSegments' => 'setIpSegments',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'status' => 'setStatus',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineId  解析线路ID。
    * name  解析线路名称。
    * ipSegments  IP地址段。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * status  资源状态。
    * description  自定义线路的描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'lineId' => 'getLineId',
            'name' => 'getName',
            'ipSegments' => 'getIpSegments',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'status' => 'getStatus',
            'description' => 'getDescription'
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
        $this->container['lineId'] = isset($data['lineId']) ? $data['lineId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ipSegments'] = isset($data['ipSegments']) ? $data['ipSegments'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets lineId
    *  解析线路ID。
    *
    * @return string|null
    */
    public function getLineId()
    {
        return $this->container['lineId'];
    }

    /**
    * Sets lineId
    *
    * @param string|null $lineId 解析线路ID。
    *
    * @return $this
    */
    public function setLineId($lineId)
    {
        $this->container['lineId'] = $lineId;
        return $this;
    }

    /**
    * Gets name
    *  解析线路名称。
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
    * @param string|null $name 解析线路名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ipSegments
    *  IP地址段。
    *
    * @return string[]|null
    */
    public function getIpSegments()
    {
        return $this->container['ipSegments'];
    }

    /**
    * Sets ipSegments
    *
    * @param string[]|null $ipSegments IP地址段。
    *
    * @return $this
    */
    public function setIpSegments($ipSegments)
    {
        $this->container['ipSegments'] = $ipSegments;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。
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
    * @param string|null $status 资源状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  自定义线路的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 自定义线路的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

