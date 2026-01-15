<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteLineGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteLineGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  线路分组名称。
    * lines  线路分组包含的线路列表。 解析线路ID。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败
    * description  线路分组的描述信息
    * lineId  线路分组的ID。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'lines' => 'string[]',
            'status' => 'string',
            'description' => 'string',
            'lineId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  线路分组名称。
    * lines  线路分组包含的线路列表。 解析线路ID。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败
    * description  线路分组的描述信息
    * lineId  线路分组的ID。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'lines' => null,
        'status' => null,
        'description' => null,
        'lineId' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * name  线路分组名称。
    * lines  线路分组包含的线路列表。 解析线路ID。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败
    * description  线路分组的描述信息
    * lineId  线路分组的ID。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'lines' => 'lines',
            'status' => 'status',
            'description' => 'description',
            'lineId' => 'line_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  线路分组名称。
    * lines  线路分组包含的线路列表。 解析线路ID。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败
    * description  线路分组的描述信息
    * lineId  线路分组的ID。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'lines' => 'setLines',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'lineId' => 'setLineId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  线路分组名称。
    * lines  线路分组包含的线路列表。 解析线路ID。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败
    * description  线路分组的描述信息
    * lineId  线路分组的ID。
    * createdAt  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updatedAt  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'lines' => 'getLines',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'lineId' => 'getLineId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lineId'] = isset($data['lineId']) ? $data['lineId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets name
    *  线路分组名称。
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
    * @param string|null $name 线路分组名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets lines
    *  线路分组包含的线路列表。 解析线路ID。
    *
    * @return string[]|null
    */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
    * Sets lines
    *
    * @param string[]|null $lines 线路分组包含的线路列表。 解析线路ID。
    *
    * @return $this
    */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败
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
    * @param string|null $status **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败
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
    *  线路分组的描述信息
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
    * @param string|null $description 线路分组的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets lineId
    *  线路分组的ID。
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
    * @param string|null $lineId 线路分组的ID。
    *
    * @return $this
    */
    public function setLineId($lineId)
    {
        $this->container['lineId'] = $lineId;
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

