<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IntrusionSubscriptionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IntrusionSubscriptionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskyAccountStatus  **参数解释**： 风险账号是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * abnormalLoginStatus  **参数解释**： 异地登录是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * maliciousProgramStatus  **参数解释**： 恶意程序是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * webshellStatus  **参数解释**： 网站后门是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * accountCrackStatus  **参数解释**： 账号破解是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * criticalFileChangeStatus  **参数解释**： 关键文件变更是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskyAccountStatus' => 'bool',
            'abnormalLoginStatus' => 'bool',
            'maliciousProgramStatus' => 'bool',
            'webshellStatus' => 'bool',
            'accountCrackStatus' => 'bool',
            'criticalFileChangeStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskyAccountStatus  **参数解释**： 风险账号是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * abnormalLoginStatus  **参数解释**： 异地登录是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * maliciousProgramStatus  **参数解释**： 恶意程序是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * webshellStatus  **参数解释**： 网站后门是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * accountCrackStatus  **参数解释**： 账号破解是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * criticalFileChangeStatus  **参数解释**： 关键文件变更是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskyAccountStatus' => null,
        'abnormalLoginStatus' => null,
        'maliciousProgramStatus' => null,
        'webshellStatus' => null,
        'accountCrackStatus' => null,
        'criticalFileChangeStatus' => null
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
    * riskyAccountStatus  **参数解释**： 风险账号是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * abnormalLoginStatus  **参数解释**： 异地登录是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * maliciousProgramStatus  **参数解释**： 恶意程序是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * webshellStatus  **参数解释**： 网站后门是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * accountCrackStatus  **参数解释**： 账号破解是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * criticalFileChangeStatus  **参数解释**： 关键文件变更是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskyAccountStatus' => 'risky_account_status',
            'abnormalLoginStatus' => 'abnormal_login_status',
            'maliciousProgramStatus' => 'malicious_program_status',
            'webshellStatus' => 'webshell_status',
            'accountCrackStatus' => 'account_crack_status',
            'criticalFileChangeStatus' => 'critical_file_change_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskyAccountStatus  **参数解释**： 风险账号是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * abnormalLoginStatus  **参数解释**： 异地登录是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * maliciousProgramStatus  **参数解释**： 恶意程序是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * webshellStatus  **参数解释**： 网站后门是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * accountCrackStatus  **参数解释**： 账号破解是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * criticalFileChangeStatus  **参数解释**： 关键文件变更是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'riskyAccountStatus' => 'setRiskyAccountStatus',
            'abnormalLoginStatus' => 'setAbnormalLoginStatus',
            'maliciousProgramStatus' => 'setMaliciousProgramStatus',
            'webshellStatus' => 'setWebshellStatus',
            'accountCrackStatus' => 'setAccountCrackStatus',
            'criticalFileChangeStatus' => 'setCriticalFileChangeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskyAccountStatus  **参数解释**： 风险账号是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * abnormalLoginStatus  **参数解释**： 异地登录是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * maliciousProgramStatus  **参数解释**： 恶意程序是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * webshellStatus  **参数解释**： 网站后门是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * accountCrackStatus  **参数解释**： 账号破解是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * criticalFileChangeStatus  **参数解释**： 关键文件变更是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'riskyAccountStatus' => 'getRiskyAccountStatus',
            'abnormalLoginStatus' => 'getAbnormalLoginStatus',
            'maliciousProgramStatus' => 'getMaliciousProgramStatus',
            'webshellStatus' => 'getWebshellStatus',
            'accountCrackStatus' => 'getAccountCrackStatus',
            'criticalFileChangeStatus' => 'getCriticalFileChangeStatus'
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
        $this->container['riskyAccountStatus'] = isset($data['riskyAccountStatus']) ? $data['riskyAccountStatus'] : null;
        $this->container['abnormalLoginStatus'] = isset($data['abnormalLoginStatus']) ? $data['abnormalLoginStatus'] : null;
        $this->container['maliciousProgramStatus'] = isset($data['maliciousProgramStatus']) ? $data['maliciousProgramStatus'] : null;
        $this->container['webshellStatus'] = isset($data['webshellStatus']) ? $data['webshellStatus'] : null;
        $this->container['accountCrackStatus'] = isset($data['accountCrackStatus']) ? $data['accountCrackStatus'] : null;
        $this->container['criticalFileChangeStatus'] = isset($data['criticalFileChangeStatus']) ? $data['criticalFileChangeStatus'] : null;
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
    * Gets riskyAccountStatus
    *  **参数解释**： 风险账号是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getRiskyAccountStatus()
    {
        return $this->container['riskyAccountStatus'];
    }

    /**
    * Sets riskyAccountStatus
    *
    * @param bool|null $riskyAccountStatus **参数解释**： 风险账号是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRiskyAccountStatus($riskyAccountStatus)
    {
        $this->container['riskyAccountStatus'] = $riskyAccountStatus;
        return $this;
    }

    /**
    * Gets abnormalLoginStatus
    *  **参数解释**： 异地登录是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getAbnormalLoginStatus()
    {
        return $this->container['abnormalLoginStatus'];
    }

    /**
    * Sets abnormalLoginStatus
    *
    * @param bool|null $abnormalLoginStatus **参数解释**： 异地登录是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAbnormalLoginStatus($abnormalLoginStatus)
    {
        $this->container['abnormalLoginStatus'] = $abnormalLoginStatus;
        return $this;
    }

    /**
    * Gets maliciousProgramStatus
    *  **参数解释**： 恶意程序是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getMaliciousProgramStatus()
    {
        return $this->container['maliciousProgramStatus'];
    }

    /**
    * Sets maliciousProgramStatus
    *
    * @param bool|null $maliciousProgramStatus **参数解释**： 恶意程序是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMaliciousProgramStatus($maliciousProgramStatus)
    {
        $this->container['maliciousProgramStatus'] = $maliciousProgramStatus;
        return $this;
    }

    /**
    * Gets webshellStatus
    *  **参数解释**： 网站后门是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getWebshellStatus()
    {
        return $this->container['webshellStatus'];
    }

    /**
    * Sets webshellStatus
    *
    * @param bool|null $webshellStatus **参数解释**： 网站后门是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setWebshellStatus($webshellStatus)
    {
        $this->container['webshellStatus'] = $webshellStatus;
        return $this;
    }

    /**
    * Gets accountCrackStatus
    *  **参数解释**： 账号破解是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getAccountCrackStatus()
    {
        return $this->container['accountCrackStatus'];
    }

    /**
    * Sets accountCrackStatus
    *
    * @param bool|null $accountCrackStatus **参数解释**： 账号破解是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAccountCrackStatus($accountCrackStatus)
    {
        $this->container['accountCrackStatus'] = $accountCrackStatus;
        return $this;
    }

    /**
    * Gets criticalFileChangeStatus
    *  **参数解释**： 关键文件变更是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getCriticalFileChangeStatus()
    {
        return $this->container['criticalFileChangeStatus'];
    }

    /**
    * Sets criticalFileChangeStatus
    *
    * @param bool|null $criticalFileChangeStatus **参数解释**： 关键文件变更是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCriticalFileChangeStatus($criticalFileChangeStatus)
    {
        $this->container['criticalFileChangeStatus'] = $criticalFileChangeStatus;
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

