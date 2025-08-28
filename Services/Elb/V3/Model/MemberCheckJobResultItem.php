<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberCheckJobResultItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberCheckJobResultItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：检查项名称。  **取值范围**：不涉及
    * reason  **参数解释**：异常原因。  **取值范围**：不涉及
    * severity  **参数解释**：重要级别，分为Major(严重)和Tips(提示)。  **取值范围**：不涉及
    * subject  **参数解释**：检查类别，config表示配置检查。  **取值范围**：不涉及
    * jobId  **参数解释**：任务ID。  **取值范围**：不涉及
    * reasonTemplate  **参数解释**：异常原因模板。  **取值范围**：不涉及
    * reasonParams  **参数解释**：异常结果变量参数表，用于结合异常原因模板动态生成异常原因。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'reason' => 'string',
            'severity' => 'string',
            'subject' => 'string',
            'jobId' => 'string',
            'reasonTemplate' => 'string',
            'reasonParams' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：检查项名称。  **取值范围**：不涉及
    * reason  **参数解释**：异常原因。  **取值范围**：不涉及
    * severity  **参数解释**：重要级别，分为Major(严重)和Tips(提示)。  **取值范围**：不涉及
    * subject  **参数解释**：检查类别，config表示配置检查。  **取值范围**：不涉及
    * jobId  **参数解释**：任务ID。  **取值范围**：不涉及
    * reasonTemplate  **参数解释**：异常原因模板。  **取值范围**：不涉及
    * reasonParams  **参数解释**：异常结果变量参数表，用于结合异常原因模板动态生成异常原因。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'reason' => null,
        'severity' => null,
        'subject' => null,
        'jobId' => null,
        'reasonTemplate' => null,
        'reasonParams' => null
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
    * name  **参数解释**：检查项名称。  **取值范围**：不涉及
    * reason  **参数解释**：异常原因。  **取值范围**：不涉及
    * severity  **参数解释**：重要级别，分为Major(严重)和Tips(提示)。  **取值范围**：不涉及
    * subject  **参数解释**：检查类别，config表示配置检查。  **取值范围**：不涉及
    * jobId  **参数解释**：任务ID。  **取值范围**：不涉及
    * reasonTemplate  **参数解释**：异常原因模板。  **取值范围**：不涉及
    * reasonParams  **参数解释**：异常结果变量参数表，用于结合异常原因模板动态生成异常原因。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'reason' => 'reason',
            'severity' => 'severity',
            'subject' => 'subject',
            'jobId' => 'job_id',
            'reasonTemplate' => 'reason_template',
            'reasonParams' => 'reason_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：检查项名称。  **取值范围**：不涉及
    * reason  **参数解释**：异常原因。  **取值范围**：不涉及
    * severity  **参数解释**：重要级别，分为Major(严重)和Tips(提示)。  **取值范围**：不涉及
    * subject  **参数解释**：检查类别，config表示配置检查。  **取值范围**：不涉及
    * jobId  **参数解释**：任务ID。  **取值范围**：不涉及
    * reasonTemplate  **参数解释**：异常原因模板。  **取值范围**：不涉及
    * reasonParams  **参数解释**：异常结果变量参数表，用于结合异常原因模板动态生成异常原因。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'reason' => 'setReason',
            'severity' => 'setSeverity',
            'subject' => 'setSubject',
            'jobId' => 'setJobId',
            'reasonTemplate' => 'setReasonTemplate',
            'reasonParams' => 'setReasonParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：检查项名称。  **取值范围**：不涉及
    * reason  **参数解释**：异常原因。  **取值范围**：不涉及
    * severity  **参数解释**：重要级别，分为Major(严重)和Tips(提示)。  **取值范围**：不涉及
    * subject  **参数解释**：检查类别，config表示配置检查。  **取值范围**：不涉及
    * jobId  **参数解释**：任务ID。  **取值范围**：不涉及
    * reasonTemplate  **参数解释**：异常原因模板。  **取值范围**：不涉及
    * reasonParams  **参数解释**：异常结果变量参数表，用于结合异常原因模板动态生成异常原因。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'reason' => 'getReason',
            'severity' => 'getSeverity',
            'subject' => 'getSubject',
            'jobId' => 'getJobId',
            'reasonTemplate' => 'getReasonTemplate',
            'reasonParams' => 'getReasonParams'
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['reasonTemplate'] = isset($data['reasonTemplate']) ? $data['reasonTemplate'] : null;
        $this->container['reasonParams'] = isset($data['reasonParams']) ? $data['reasonParams'] : null;
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
    *  **参数解释**：检查项名称。  **取值范围**：不涉及
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
    * @param string|null $name **参数解释**：检查项名称。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**：异常原因。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数解释**：异常原因。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**：重要级别，分为Major(严重)和Tips(提示)。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**：重要级别，分为Major(严重)和Tips(提示)。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets subject
    *  **参数解释**：检查类别，config表示配置检查。  **取值范围**：不涉及
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
    * @param string|null $subject **参数解释**：检查类别，config表示配置检查。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**：任务ID。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**：任务ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets reasonTemplate
    *  **参数解释**：异常原因模板。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getReasonTemplate()
    {
        return $this->container['reasonTemplate'];
    }

    /**
    * Sets reasonTemplate
    *
    * @param string|null $reasonTemplate **参数解释**：异常原因模板。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setReasonTemplate($reasonTemplate)
    {
        $this->container['reasonTemplate'] = $reasonTemplate;
        return $this;
    }

    /**
    * Gets reasonParams
    *  **参数解释**：异常结果变量参数表，用于结合异常原因模板动态生成异常原因。  **取值范围**：不涉及
    *
    * @return string[]|null
    */
    public function getReasonParams()
    {
        return $this->container['reasonParams'];
    }

    /**
    * Sets reasonParams
    *
    * @param string[]|null $reasonParams **参数解释**：异常结果变量参数表，用于结合异常原因模板动态生成异常原因。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setReasonParams($reasonParams)
    {
        $this->container['reasonParams'] = $reasonParams;
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

