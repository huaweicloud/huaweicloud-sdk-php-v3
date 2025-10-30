<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckPolicyInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckPolicyInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  **参数解释**： 策略名称 **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度0-64位
    * content  策略详情
    * pwdPolicyContent  pwdPolicyContent
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'policyId' => 'string',
            'content' => 'string',
            'pwdPolicyContent' => '\HuaweiCloud\SDK\Hss\V5\Model\PwdCheckTagInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  **参数解释**： 策略名称 **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度0-64位
    * content  策略详情
    * pwdPolicyContent  pwdPolicyContent
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'policyId' => null,
        'content' => null,
        'pwdPolicyContent' => null
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
    * policyName  **参数解释**： 策略名称 **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度0-64位
    * content  策略详情
    * pwdPolicyContent  pwdPolicyContent
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'policyId' => 'policy_id',
            'content' => 'content',
            'pwdPolicyContent' => 'pwd_policy_content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  **参数解释**： 策略名称 **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度0-64位
    * content  策略详情
    * pwdPolicyContent  pwdPolicyContent
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'policyId' => 'setPolicyId',
            'content' => 'setContent',
            'pwdPolicyContent' => 'setPwdPolicyContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  **参数解释**： 策略名称 **取值范围**： 字符长度1-256位
    * policyId  **参数解释**： 策略ID **取值范围**： 字符长度0-64位
    * content  策略详情
    * pwdPolicyContent  pwdPolicyContent
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'policyId' => 'getPolicyId',
            'content' => 'getContent',
            'pwdPolicyContent' => 'getPwdPolicyContent'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['pwdPolicyContent'] = isset($data['pwdPolicyContent']) ? $data['pwdPolicyContent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 65535)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
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
    * Gets policyName
    *  **参数解释**： 策略名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName **参数解释**： 策略名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyId
    *  **参数解释**： 策略ID **取值范围**： 字符长度0-64位
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId **参数解释**： 策略ID **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets content
    *  策略详情
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 策略详情
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets pwdPolicyContent
    *  pwdPolicyContent
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\PwdCheckTagInfo|null
    */
    public function getPwdPolicyContent()
    {
        return $this->container['pwdPolicyContent'];
    }

    /**
    * Sets pwdPolicyContent
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\PwdCheckTagInfo|null $pwdPolicyContent pwdPolicyContent
    *
    * @return $this
    */
    public function setPwdPolicyContent($pwdPolicyContent)
    {
        $this->container['pwdPolicyContent'] = $pwdPolicyContent;
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

