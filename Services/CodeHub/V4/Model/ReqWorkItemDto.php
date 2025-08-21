<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqWorkItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqWorkItemDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 工作项ID。
    * subject  **参数解释：** 工作项标题。
    * sequence  **参数解释：** 工作项编号， scrum类型项目该值为空。
    * tracker  tracker
    * status  status
    * priority  priority
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'subject' => 'string',
            'sequence' => 'string',
            'tracker' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto',
            'status' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto',
            'priority' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 工作项ID。
    * subject  **参数解释：** 工作项标题。
    * sequence  **参数解释：** 工作项编号， scrum类型项目该值为空。
    * tracker  tracker
    * status  status
    * priority  priority
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'subject' => null,
        'sequence' => null,
        'tracker' => null,
        'status' => null,
        'priority' => null
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
    * id  **参数解释：** 工作项ID。
    * subject  **参数解释：** 工作项标题。
    * sequence  **参数解释：** 工作项编号， scrum类型项目该值为空。
    * tracker  tracker
    * status  status
    * priority  priority
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'subject' => 'subject',
            'sequence' => 'sequence',
            'tracker' => 'tracker',
            'status' => 'status',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 工作项ID。
    * subject  **参数解释：** 工作项标题。
    * sequence  **参数解释：** 工作项编号， scrum类型项目该值为空。
    * tracker  tracker
    * status  status
    * priority  priority
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'subject' => 'setSubject',
            'sequence' => 'setSequence',
            'tracker' => 'setTracker',
            'status' => 'setStatus',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 工作项ID。
    * subject  **参数解释：** 工作项标题。
    * sequence  **参数解释：** 工作项编号， scrum类型项目该值为空。
    * tracker  tracker
    * status  status
    * priority  priority
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'subject' => 'getSubject',
            'sequence' => 'getSequence',
            'tracker' => 'getTracker',
            'status' => 'getStatus',
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 100)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 100000)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 1)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) > 100)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) < 1)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 工作项ID。
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
    * @param string|null $id **参数解释：** 工作项ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets subject
    *  **参数解释：** 工作项标题。
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject **参数解释：** 工作项标题。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets sequence
    *  **参数解释：** 工作项编号， scrum类型项目该值为空。
    *
    * @return string|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param string|null $sequence **参数解释：** 工作项编号， scrum类型项目该值为空。
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets tracker
    *  tracker
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto|null
    */
    public function getTracker()
    {
        return $this->container['tracker'];
    }

    /**
    * Sets tracker
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto|null $tracker tracker
    *
    * @return $this
    */
    public function setTracker($tracker)
    {
        $this->container['tracker'] = $tracker;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets priority
    *  priority
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ReqWorkItemBasicDto|null $priority priority
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

