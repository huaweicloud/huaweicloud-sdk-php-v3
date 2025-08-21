<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportProfileVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportProfileVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * profileId  **参数解释**： 模板ID **取值范围**： 不涉及
    * name  **参数解释**： 模板名称 **取值范围**： 不涉及
    * category  **参数解释**： 模板类型 **取值范围**： daily 日报 weekly 周报 custom 自定义报告
    * status  **参数解释**： 启用状态 **取值范围**： 不涉及
    * reportId  **参数解释**： 最新的报告的ID **取值范围**： 不涉及
    * lastTime  **参数解释**： 最新的报告的生成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'profileId' => 'string',
            'name' => 'string',
            'category' => 'string',
            'status' => 'int',
            'reportId' => 'string',
            'lastTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * profileId  **参数解释**： 模板ID **取值范围**： 不涉及
    * name  **参数解释**： 模板名称 **取值范围**： 不涉及
    * category  **参数解释**： 模板类型 **取值范围**： daily 日报 weekly 周报 custom 自定义报告
    * status  **参数解释**： 启用状态 **取值范围**： 不涉及
    * reportId  **参数解释**： 最新的报告的ID **取值范围**： 不涉及
    * lastTime  **参数解释**： 最新的报告的生成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'profileId' => null,
        'name' => null,
        'category' => null,
        'status' => 'int32',
        'reportId' => null,
        'lastTime' => 'int64'
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
    * profileId  **参数解释**： 模板ID **取值范围**： 不涉及
    * name  **参数解释**： 模板名称 **取值范围**： 不涉及
    * category  **参数解释**： 模板类型 **取值范围**： daily 日报 weekly 周报 custom 自定义报告
    * status  **参数解释**： 启用状态 **取值范围**： 不涉及
    * reportId  **参数解释**： 最新的报告的ID **取值范围**： 不涉及
    * lastTime  **参数解释**： 最新的报告的生成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'profileId' => 'profile_id',
            'name' => 'name',
            'category' => 'category',
            'status' => 'status',
            'reportId' => 'report_id',
            'lastTime' => 'last_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * profileId  **参数解释**： 模板ID **取值范围**： 不涉及
    * name  **参数解释**： 模板名称 **取值范围**： 不涉及
    * category  **参数解释**： 模板类型 **取值范围**： daily 日报 weekly 周报 custom 自定义报告
    * status  **参数解释**： 启用状态 **取值范围**： 不涉及
    * reportId  **参数解释**： 最新的报告的ID **取值范围**： 不涉及
    * lastTime  **参数解释**： 最新的报告的生成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'profileId' => 'setProfileId',
            'name' => 'setName',
            'category' => 'setCategory',
            'status' => 'setStatus',
            'reportId' => 'setReportId',
            'lastTime' => 'setLastTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * profileId  **参数解释**： 模板ID **取值范围**： 不涉及
    * name  **参数解释**： 模板名称 **取值范围**： 不涉及
    * category  **参数解释**： 模板类型 **取值范围**： daily 日报 weekly 周报 custom 自定义报告
    * status  **参数解释**： 启用状态 **取值范围**： 不涉及
    * reportId  **参数解释**： 最新的报告的ID **取值范围**： 不涉及
    * lastTime  **参数解释**： 最新的报告的生成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'profileId' => 'getProfileId',
            'name' => 'getName',
            'category' => 'getCategory',
            'status' => 'getStatus',
            'reportId' => 'getReportId',
            'lastTime' => 'getLastTime'
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
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['lastTime'] = isset($data['lastTime']) ? $data['lastTime'] : null;
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
    * Gets profileId
    *  **参数解释**： 模板ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
    * Sets profileId
    *
    * @param string|null $profileId **参数解释**： 模板ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 模板名称 **取值范围**： 不涉及
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
    * @param string|null $name **参数解释**： 模板名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 模板类型 **取值范围**： daily 日报 weekly 周报 custom 自定义报告
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
    * @param string|null $category **参数解释**： 模板类型 **取值范围**： daily 日报 weekly 周报 custom 自定义报告
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
    *  **参数解释**： 启用状态 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释**： 启用状态 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets reportId
    *  **参数解释**： 最新的报告的ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId **参数解释**： 最新的报告的ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets lastTime
    *  **参数解释**： 最新的报告的生成时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLastTime()
    {
        return $this->container['lastTime'];
    }

    /**
    * Sets lastTime
    *
    * @param int|null $lastTime **参数解释**： 最新的报告的生成时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLastTime($lastTime)
    {
        $this->container['lastTime'] = $lastTime;
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

