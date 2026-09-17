<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 工作项唯一ID。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作项分类。 **取值范围**： 不涉及。
    * status  status
    * assignee  assignee
    * baseline  **参数解释**： 工作项基线状态。 **取值范围**： - baselined：已基线 - unbaseline：未基线 - \"\"：未基线
    * changeStatus  **参数解释**： 工作项变更状态。 **取值范围**： - cannot_finish：不可完成
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'title' => 'string',
            'number' => 'string',
            'category' => 'string',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVoIpd',
            'assignee' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'baseline' => 'string',
            'changeStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 工作项唯一ID。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作项分类。 **取值范围**： 不涉及。
    * status  status
    * assignee  assignee
    * baseline  **参数解释**： 工作项基线状态。 **取值范围**： - baselined：已基线 - unbaseline：未基线 - \"\"：未基线
    * changeStatus  **参数解释**： 工作项变更状态。 **取值范围**： - cannot_finish：不可完成
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'number' => null,
        'category' => null,
        'status' => null,
        'assignee' => null,
        'baseline' => null,
        'changeStatus' => null
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
    * id  **参数解释**： 工作项唯一ID。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作项分类。 **取值范围**： 不涉及。
    * status  status
    * assignee  assignee
    * baseline  **参数解释**： 工作项基线状态。 **取值范围**： - baselined：已基线 - unbaseline：未基线 - \"\"：未基线
    * changeStatus  **参数解释**： 工作项变更状态。 **取值范围**： - cannot_finish：不可完成
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'title' => 'title',
            'number' => 'number',
            'category' => 'category',
            'status' => 'status',
            'assignee' => 'assignee',
            'baseline' => 'baseline',
            'changeStatus' => 'change_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 工作项唯一ID。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作项分类。 **取值范围**： 不涉及。
    * status  status
    * assignee  assignee
    * baseline  **参数解释**： 工作项基线状态。 **取值范围**： - baselined：已基线 - unbaseline：未基线 - \"\"：未基线
    * changeStatus  **参数解释**： 工作项变更状态。 **取值范围**： - cannot_finish：不可完成
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'title' => 'setTitle',
            'number' => 'setNumber',
            'category' => 'setCategory',
            'status' => 'setStatus',
            'assignee' => 'setAssignee',
            'baseline' => 'setBaseline',
            'changeStatus' => 'setChangeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 工作项唯一ID。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * category  **参数解释**： 工作项分类。 **取值范围**： 不涉及。
    * status  status
    * assignee  assignee
    * baseline  **参数解释**： 工作项基线状态。 **取值范围**： - baselined：已基线 - unbaseline：未基线 - \"\"：未基线
    * changeStatus  **参数解释**： 工作项变更状态。 **取值范围**： - cannot_finish：不可完成
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'title' => 'getTitle',
            'number' => 'getNumber',
            'category' => 'getCategory',
            'status' => 'getStatus',
            'assignee' => 'getAssignee',
            'baseline' => 'getBaseline',
            'changeStatus' => 'getChangeStatus'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['changeStatus'] = isset($data['changeStatus']) ? $data['changeStatus'] : null;
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
    * Gets id
    *  **参数解释**： 工作项唯一ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 工作项唯一ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets number
    *  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 工作项分类。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 工作项分类。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVoIpd|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVoIpd|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets assignee
    *  assignee
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets baseline
    *  **参数解释**： 工作项基线状态。 **取值范围**： - baselined：已基线 - unbaseline：未基线 - \"\"：未基线
    *
    * @return string|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param string|null $baseline **参数解释**： 工作项基线状态。 **取值范围**： - baselined：已基线 - unbaseline：未基线 - \"\"：未基线
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
        return $this;
    }

    /**
    * Gets changeStatus
    *  **参数解释**： 工作项变更状态。 **取值范围**： - cannot_finish：不可完成
    *
    * @return string|null
    */
    public function getChangeStatus()
    {
        return $this->container['changeStatus'];
    }

    /**
    * Sets changeStatus
    *
    * @param string|null $changeStatus **参数解释**： 工作项变更状态。 **取值范围**： - cannot_finish：不可完成
    *
    * @return $this
    */
    public function setChangeStatus($changeStatus)
    {
        $this->container['changeStatus'] = $changeStatus;
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

