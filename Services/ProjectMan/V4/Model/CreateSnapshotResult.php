<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSnapshotResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSnapshotResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  快照ID。
    * title  快照名称。创建时自动生成，工作项快照名称生成规则为：“工作项类型”+“ v” + “年”+“.”+“月”+“.”+“日”+“.”+“当日生成版本次数”。例如工作项类型为IR的工作项在2026年3月25日第一次打快照系统生成的快照名称为：IR v26.03.25.1。
    * category  快照类型。工作项快照固定为：issue_snap_item。
    * issueId  快照的工作项ID。
    * createdBy  快照的创建人ID。
    * deletable  快照是否可被删除。
    * errormsg  创建快照失败的原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'title' => 'string',
            'category' => 'string',
            'issueId' => 'string',
            'createdBy' => 'string',
            'deletable' => 'bool',
            'errormsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  快照ID。
    * title  快照名称。创建时自动生成，工作项快照名称生成规则为：“工作项类型”+“ v” + “年”+“.”+“月”+“.”+“日”+“.”+“当日生成版本次数”。例如工作项类型为IR的工作项在2026年3月25日第一次打快照系统生成的快照名称为：IR v26.03.25.1。
    * category  快照类型。工作项快照固定为：issue_snap_item。
    * issueId  快照的工作项ID。
    * createdBy  快照的创建人ID。
    * deletable  快照是否可被删除。
    * errormsg  创建快照失败的原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'category' => null,
        'issueId' => null,
        'createdBy' => null,
        'deletable' => null,
        'errormsg' => null
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
    * id  快照ID。
    * title  快照名称。创建时自动生成，工作项快照名称生成规则为：“工作项类型”+“ v” + “年”+“.”+“月”+“.”+“日”+“.”+“当日生成版本次数”。例如工作项类型为IR的工作项在2026年3月25日第一次打快照系统生成的快照名称为：IR v26.03.25.1。
    * category  快照类型。工作项快照固定为：issue_snap_item。
    * issueId  快照的工作项ID。
    * createdBy  快照的创建人ID。
    * deletable  快照是否可被删除。
    * errormsg  创建快照失败的原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'title' => 'title',
            'category' => 'category',
            'issueId' => 'issue_id',
            'createdBy' => 'created_by',
            'deletable' => 'deletable',
            'errormsg' => 'errormsg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  快照ID。
    * title  快照名称。创建时自动生成，工作项快照名称生成规则为：“工作项类型”+“ v” + “年”+“.”+“月”+“.”+“日”+“.”+“当日生成版本次数”。例如工作项类型为IR的工作项在2026年3月25日第一次打快照系统生成的快照名称为：IR v26.03.25.1。
    * category  快照类型。工作项快照固定为：issue_snap_item。
    * issueId  快照的工作项ID。
    * createdBy  快照的创建人ID。
    * deletable  快照是否可被删除。
    * errormsg  创建快照失败的原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'title' => 'setTitle',
            'category' => 'setCategory',
            'issueId' => 'setIssueId',
            'createdBy' => 'setCreatedBy',
            'deletable' => 'setDeletable',
            'errormsg' => 'setErrormsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  快照ID。
    * title  快照名称。创建时自动生成，工作项快照名称生成规则为：“工作项类型”+“ v” + “年”+“.”+“月”+“.”+“日”+“.”+“当日生成版本次数”。例如工作项类型为IR的工作项在2026年3月25日第一次打快照系统生成的快照名称为：IR v26.03.25.1。
    * category  快照类型。工作项快照固定为：issue_snap_item。
    * issueId  快照的工作项ID。
    * createdBy  快照的创建人ID。
    * deletable  快照是否可被删除。
    * errormsg  创建快照失败的原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'title' => 'getTitle',
            'category' => 'getCategory',
            'issueId' => 'getIssueId',
            'createdBy' => 'getCreatedBy',
            'deletable' => 'getDeletable',
            'errormsg' => 'getErrormsg'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
        $this->container['errormsg'] = isset($data['errormsg']) ? $data['errormsg'] : null;
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
    *  快照ID。
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
    * @param string|null $id 快照ID。
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
    *  快照名称。创建时自动生成，工作项快照名称生成规则为：“工作项类型”+“ v” + “年”+“.”+“月”+“.”+“日”+“.”+“当日生成版本次数”。例如工作项类型为IR的工作项在2026年3月25日第一次打快照系统生成的快照名称为：IR v26.03.25.1。
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
    * @param string|null $title 快照名称。创建时自动生成，工作项快照名称生成规则为：“工作项类型”+“ v” + “年”+“.”+“月”+“.”+“日”+“.”+“当日生成版本次数”。例如工作项类型为IR的工作项在2026年3月25日第一次打快照系统生成的快照名称为：IR v26.03.25.1。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets category
    *  快照类型。工作项快照固定为：issue_snap_item。
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
    * @param string|null $category 快照类型。工作项快照固定为：issue_snap_item。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets issueId
    *  快照的工作项ID。
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 快照的工作项ID。
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets createdBy
    *  快照的创建人ID。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 快照的创建人ID。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets deletable
    *  快照是否可被删除。
    *
    * @return bool|null
    */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
    * Sets deletable
    *
    * @param bool|null $deletable 快照是否可被删除。
    *
    * @return $this
    */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;
        return $this;
    }

    /**
    * Gets errormsg
    *  创建快照失败的原因。
    *
    * @return string|null
    */
    public function getErrormsg()
    {
        return $this->container['errormsg'];
    }

    /**
    * Sets errormsg
    *
    * @param string|null $errormsg 创建快照失败的原因。
    *
    * @return $this
    */
    public function setErrormsg($errormsg)
    {
        $this->container['errormsg'] = $errormsg;
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

