<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IntrusionInfoRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IntrusionInfoRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskyAccountInfoList  **参数解释**： 风险账号列表 **取值范围**： 0-200个RiskyAccountInfo对象
    * abnormalLoginInfoList  **参数解释**： 异地登录列表 **取值范围**： 0-200个AbnormalLoginInfo对象
    * maliciousProgramInfoList  **参数解释**： 恶意程序列表 **取值范围**： 0-200个MaliciousProgramInfo对象
    * webshellInfoList  **参数解释**： 网站后门列表 **取值范围**： 0-200个WebshellInfo对象
    * accountCrackInfoList  **参数解释**： 账号破解列表 **取值范围**： 0-200个AccountCrackInfo对象
    * criticalFileChangeInfoList  **参数解释**： 关键文件变更列表 **取值范围**： 0-200个CriticalFileChangeInfo对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskyAccountInfoList' => 'object[]',
            'abnormalLoginInfoList' => 'object[]',
            'maliciousProgramInfoList' => 'object[]',
            'webshellInfoList' => 'object[]',
            'accountCrackInfoList' => 'object[]',
            'criticalFileChangeInfoList' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskyAccountInfoList  **参数解释**： 风险账号列表 **取值范围**： 0-200个RiskyAccountInfo对象
    * abnormalLoginInfoList  **参数解释**： 异地登录列表 **取值范围**： 0-200个AbnormalLoginInfo对象
    * maliciousProgramInfoList  **参数解释**： 恶意程序列表 **取值范围**： 0-200个MaliciousProgramInfo对象
    * webshellInfoList  **参数解释**： 网站后门列表 **取值范围**： 0-200个WebshellInfo对象
    * accountCrackInfoList  **参数解释**： 账号破解列表 **取值范围**： 0-200个AccountCrackInfo对象
    * criticalFileChangeInfoList  **参数解释**： 关键文件变更列表 **取值范围**： 0-200个CriticalFileChangeInfo对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskyAccountInfoList' => null,
        'abnormalLoginInfoList' => null,
        'maliciousProgramInfoList' => null,
        'webshellInfoList' => null,
        'accountCrackInfoList' => null,
        'criticalFileChangeInfoList' => null
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
    * riskyAccountInfoList  **参数解释**： 风险账号列表 **取值范围**： 0-200个RiskyAccountInfo对象
    * abnormalLoginInfoList  **参数解释**： 异地登录列表 **取值范围**： 0-200个AbnormalLoginInfo对象
    * maliciousProgramInfoList  **参数解释**： 恶意程序列表 **取值范围**： 0-200个MaliciousProgramInfo对象
    * webshellInfoList  **参数解释**： 网站后门列表 **取值范围**： 0-200个WebshellInfo对象
    * accountCrackInfoList  **参数解释**： 账号破解列表 **取值范围**： 0-200个AccountCrackInfo对象
    * criticalFileChangeInfoList  **参数解释**： 关键文件变更列表 **取值范围**： 0-200个CriticalFileChangeInfo对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskyAccountInfoList' => 'risky_account_info_list',
            'abnormalLoginInfoList' => 'abnormal_login_info_list',
            'maliciousProgramInfoList' => 'malicious_program_info_list',
            'webshellInfoList' => 'webshell_info_list',
            'accountCrackInfoList' => 'account_crack_info_list',
            'criticalFileChangeInfoList' => 'critical_file_change_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskyAccountInfoList  **参数解释**： 风险账号列表 **取值范围**： 0-200个RiskyAccountInfo对象
    * abnormalLoginInfoList  **参数解释**： 异地登录列表 **取值范围**： 0-200个AbnormalLoginInfo对象
    * maliciousProgramInfoList  **参数解释**： 恶意程序列表 **取值范围**： 0-200个MaliciousProgramInfo对象
    * webshellInfoList  **参数解释**： 网站后门列表 **取值范围**： 0-200个WebshellInfo对象
    * accountCrackInfoList  **参数解释**： 账号破解列表 **取值范围**： 0-200个AccountCrackInfo对象
    * criticalFileChangeInfoList  **参数解释**： 关键文件变更列表 **取值范围**： 0-200个CriticalFileChangeInfo对象
    *
    * @var string[]
    */
    protected static $setters = [
            'riskyAccountInfoList' => 'setRiskyAccountInfoList',
            'abnormalLoginInfoList' => 'setAbnormalLoginInfoList',
            'maliciousProgramInfoList' => 'setMaliciousProgramInfoList',
            'webshellInfoList' => 'setWebshellInfoList',
            'accountCrackInfoList' => 'setAccountCrackInfoList',
            'criticalFileChangeInfoList' => 'setCriticalFileChangeInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskyAccountInfoList  **参数解释**： 风险账号列表 **取值范围**： 0-200个RiskyAccountInfo对象
    * abnormalLoginInfoList  **参数解释**： 异地登录列表 **取值范围**： 0-200个AbnormalLoginInfo对象
    * maliciousProgramInfoList  **参数解释**： 恶意程序列表 **取值范围**： 0-200个MaliciousProgramInfo对象
    * webshellInfoList  **参数解释**： 网站后门列表 **取值范围**： 0-200个WebshellInfo对象
    * accountCrackInfoList  **参数解释**： 账号破解列表 **取值范围**： 0-200个AccountCrackInfo对象
    * criticalFileChangeInfoList  **参数解释**： 关键文件变更列表 **取值范围**： 0-200个CriticalFileChangeInfo对象
    *
    * @var string[]
    */
    protected static $getters = [
            'riskyAccountInfoList' => 'getRiskyAccountInfoList',
            'abnormalLoginInfoList' => 'getAbnormalLoginInfoList',
            'maliciousProgramInfoList' => 'getMaliciousProgramInfoList',
            'webshellInfoList' => 'getWebshellInfoList',
            'accountCrackInfoList' => 'getAccountCrackInfoList',
            'criticalFileChangeInfoList' => 'getCriticalFileChangeInfoList'
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
        $this->container['riskyAccountInfoList'] = isset($data['riskyAccountInfoList']) ? $data['riskyAccountInfoList'] : null;
        $this->container['abnormalLoginInfoList'] = isset($data['abnormalLoginInfoList']) ? $data['abnormalLoginInfoList'] : null;
        $this->container['maliciousProgramInfoList'] = isset($data['maliciousProgramInfoList']) ? $data['maliciousProgramInfoList'] : null;
        $this->container['webshellInfoList'] = isset($data['webshellInfoList']) ? $data['webshellInfoList'] : null;
        $this->container['accountCrackInfoList'] = isset($data['accountCrackInfoList']) ? $data['accountCrackInfoList'] : null;
        $this->container['criticalFileChangeInfoList'] = isset($data['criticalFileChangeInfoList']) ? $data['criticalFileChangeInfoList'] : null;
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
    * Gets riskyAccountInfoList
    *  **参数解释**： 风险账号列表 **取值范围**： 0-200个RiskyAccountInfo对象
    *
    * @return object[]|null
    */
    public function getRiskyAccountInfoList()
    {
        return $this->container['riskyAccountInfoList'];
    }

    /**
    * Sets riskyAccountInfoList
    *
    * @param object[]|null $riskyAccountInfoList **参数解释**： 风险账号列表 **取值范围**： 0-200个RiskyAccountInfo对象
    *
    * @return $this
    */
    public function setRiskyAccountInfoList($riskyAccountInfoList)
    {
        $this->container['riskyAccountInfoList'] = $riskyAccountInfoList;
        return $this;
    }

    /**
    * Gets abnormalLoginInfoList
    *  **参数解释**： 异地登录列表 **取值范围**： 0-200个AbnormalLoginInfo对象
    *
    * @return object[]|null
    */
    public function getAbnormalLoginInfoList()
    {
        return $this->container['abnormalLoginInfoList'];
    }

    /**
    * Sets abnormalLoginInfoList
    *
    * @param object[]|null $abnormalLoginInfoList **参数解释**： 异地登录列表 **取值范围**： 0-200个AbnormalLoginInfo对象
    *
    * @return $this
    */
    public function setAbnormalLoginInfoList($abnormalLoginInfoList)
    {
        $this->container['abnormalLoginInfoList'] = $abnormalLoginInfoList;
        return $this;
    }

    /**
    * Gets maliciousProgramInfoList
    *  **参数解释**： 恶意程序列表 **取值范围**： 0-200个MaliciousProgramInfo对象
    *
    * @return object[]|null
    */
    public function getMaliciousProgramInfoList()
    {
        return $this->container['maliciousProgramInfoList'];
    }

    /**
    * Sets maliciousProgramInfoList
    *
    * @param object[]|null $maliciousProgramInfoList **参数解释**： 恶意程序列表 **取值范围**： 0-200个MaliciousProgramInfo对象
    *
    * @return $this
    */
    public function setMaliciousProgramInfoList($maliciousProgramInfoList)
    {
        $this->container['maliciousProgramInfoList'] = $maliciousProgramInfoList;
        return $this;
    }

    /**
    * Gets webshellInfoList
    *  **参数解释**： 网站后门列表 **取值范围**： 0-200个WebshellInfo对象
    *
    * @return object[]|null
    */
    public function getWebshellInfoList()
    {
        return $this->container['webshellInfoList'];
    }

    /**
    * Sets webshellInfoList
    *
    * @param object[]|null $webshellInfoList **参数解释**： 网站后门列表 **取值范围**： 0-200个WebshellInfo对象
    *
    * @return $this
    */
    public function setWebshellInfoList($webshellInfoList)
    {
        $this->container['webshellInfoList'] = $webshellInfoList;
        return $this;
    }

    /**
    * Gets accountCrackInfoList
    *  **参数解释**： 账号破解列表 **取值范围**： 0-200个AccountCrackInfo对象
    *
    * @return object[]|null
    */
    public function getAccountCrackInfoList()
    {
        return $this->container['accountCrackInfoList'];
    }

    /**
    * Sets accountCrackInfoList
    *
    * @param object[]|null $accountCrackInfoList **参数解释**： 账号破解列表 **取值范围**： 0-200个AccountCrackInfo对象
    *
    * @return $this
    */
    public function setAccountCrackInfoList($accountCrackInfoList)
    {
        $this->container['accountCrackInfoList'] = $accountCrackInfoList;
        return $this;
    }

    /**
    * Gets criticalFileChangeInfoList
    *  **参数解释**： 关键文件变更列表 **取值范围**： 0-200个CriticalFileChangeInfo对象
    *
    * @return object[]|null
    */
    public function getCriticalFileChangeInfoList()
    {
        return $this->container['criticalFileChangeInfoList'];
    }

    /**
    * Sets criticalFileChangeInfoList
    *
    * @param object[]|null $criticalFileChangeInfoList **参数解释**： 关键文件变更列表 **取值范围**： 0-200个CriticalFileChangeInfo对象
    *
    * @return $this
    */
    public function setCriticalFileChangeInfoList($criticalFileChangeInfoList)
    {
        $this->container['criticalFileChangeInfoList'] = $criticalFileChangeInfoList;
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

