<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHandleTaskDetailResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHandleTaskDetailResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-256位
    * publicIp  **参数解释**: 公网IP **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 私网IP **取值范围**: 字符长度0-128位
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important：重要。 - common：一般。 - test：测试。
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-512位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * handleStatus  **参数解释**: 处置状态 **取值范围**: - ready：待执行。 - running：执行中。 - success：处置成功。 - failed：处置失败。
    * failedReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * failedReasonDescription  **参数解释**: 失败原因的业务语言描述 **取值范围**: 字符长度0-512位
    * failedReasonSolution  **参数解释**: 失败原因的解决方案 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 存在漏洞的软件名称 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 存在漏洞的软件版本 **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'assetValue' => 'string',
            'vulId' => 'string',
            'vulName' => 'string',
            'handleStatus' => 'string',
            'failedReason' => 'string',
            'failedReasonDescription' => 'string',
            'failedReasonSolution' => 'string',
            'appName' => 'string',
            'appVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-256位
    * publicIp  **参数解释**: 公网IP **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 私网IP **取值范围**: 字符长度0-128位
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important：重要。 - common：一般。 - test：测试。
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-512位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * handleStatus  **参数解释**: 处置状态 **取值范围**: - ready：待执行。 - running：执行中。 - success：处置成功。 - failed：处置失败。
    * failedReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * failedReasonDescription  **参数解释**: 失败原因的业务语言描述 **取值范围**: 字符长度0-512位
    * failedReasonSolution  **参数解释**: 失败原因的解决方案 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 存在漏洞的软件名称 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 存在漏洞的软件版本 **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'assetValue' => null,
        'vulId' => null,
        'vulName' => null,
        'handleStatus' => null,
        'failedReason' => null,
        'failedReasonDescription' => null,
        'failedReasonSolution' => null,
        'appName' => null,
        'appVersion' => null
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
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-256位
    * publicIp  **参数解释**: 公网IP **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 私网IP **取值范围**: 字符长度0-128位
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important：重要。 - common：一般。 - test：测试。
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-512位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * handleStatus  **参数解释**: 处置状态 **取值范围**: - ready：待执行。 - running：执行中。 - success：处置成功。 - failed：处置失败。
    * failedReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * failedReasonDescription  **参数解释**: 失败原因的业务语言描述 **取值范围**: 字符长度0-512位
    * failedReasonSolution  **参数解释**: 失败原因的解决方案 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 存在漏洞的软件名称 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 存在漏洞的软件版本 **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'assetValue' => 'asset_value',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'handleStatus' => 'handle_status',
            'failedReason' => 'failed_reason',
            'failedReasonDescription' => 'failed_reason_description',
            'failedReasonSolution' => 'failed_reason_solution',
            'appName' => 'app_name',
            'appVersion' => 'app_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-256位
    * publicIp  **参数解释**: 公网IP **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 私网IP **取值范围**: 字符长度0-128位
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important：重要。 - common：一般。 - test：测试。
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-512位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * handleStatus  **参数解释**: 处置状态 **取值范围**: - ready：待执行。 - running：执行中。 - success：处置成功。 - failed：处置失败。
    * failedReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * failedReasonDescription  **参数解释**: 失败原因的业务语言描述 **取值范围**: 字符长度0-512位
    * failedReasonSolution  **参数解释**: 失败原因的解决方案 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 存在漏洞的软件名称 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 存在漏洞的软件版本 **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'assetValue' => 'setAssetValue',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'handleStatus' => 'setHandleStatus',
            'failedReason' => 'setFailedReason',
            'failedReasonDescription' => 'setFailedReasonDescription',
            'failedReasonSolution' => 'setFailedReasonSolution',
            'appName' => 'setAppName',
            'appVersion' => 'setAppVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 主机ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-256位
    * publicIp  **参数解释**: 公网IP **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 私网IP **取值范围**: 字符长度0-128位
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important：重要。 - common：一般。 - test：测试。
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-512位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * handleStatus  **参数解释**: 处置状态 **取值范围**: - ready：待执行。 - running：执行中。 - success：处置成功。 - failed：处置失败。
    * failedReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * failedReasonDescription  **参数解释**: 失败原因的业务语言描述 **取值范围**: 字符长度0-512位
    * failedReasonSolution  **参数解释**: 失败原因的解决方案 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 存在漏洞的软件名称 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 存在漏洞的软件版本 **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'assetValue' => 'getAssetValue',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'handleStatus' => 'getHandleStatus',
            'failedReason' => 'getFailedReason',
            'failedReasonDescription' => 'getFailedReasonDescription',
            'failedReasonSolution' => 'getFailedReasonSolution',
            'appName' => 'getAppName',
            'appVersion' => 'getAppVersion'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['failedReasonDescription'] = isset($data['failedReasonDescription']) ? $data['failedReasonDescription'] : null;
        $this->container['failedReasonSolution'] = isset($data['failedReasonSolution']) ? $data['failedReasonSolution'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 512)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedReasonDescription']) && (mb_strlen($this->container['failedReasonDescription']) > 512)) {
                $invalidProperties[] = "invalid value for 'failedReasonDescription', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['failedReasonDescription']) && (mb_strlen($this->container['failedReasonDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReasonDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedReasonSolution']) && (mb_strlen($this->container['failedReasonSolution']) > 512)) {
                $invalidProperties[] = "invalid value for 'failedReasonSolution', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['failedReasonSolution']) && (mb_strlen($this->container['failedReasonSolution']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReasonSolution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
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
    * Gets hostId
    *  **参数解释**: 主机ID **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 主机ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 主机名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 主机名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 公网IP **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**: 公网IP **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 私网IP **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**: 私网IP **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 资产重要性 **取值范围**: - important：重要。 - common：一般。 - test：测试。
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**: 资产重要性 **取值范围**: - important：重要。 - common：一般。 - test：测试。
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞ID **取值范围**: 字符长度1-512位
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞ID **取值范围**: 字符长度1-512位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 处置状态 **取值范围**: - ready：待执行。 - running：执行中。 - success：处置成功。 - failed：处置失败。
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**: 处置状态 **取值范围**: - ready：待执行。 - running：执行中。 - success：处置成功。 - failed：处置失败。
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets failedReason
    *  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets failedReasonDescription
    *  **参数解释**: 失败原因的业务语言描述 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getFailedReasonDescription()
    {
        return $this->container['failedReasonDescription'];
    }

    /**
    * Sets failedReasonDescription
    *
    * @param string|null $failedReasonDescription **参数解释**: 失败原因的业务语言描述 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setFailedReasonDescription($failedReasonDescription)
    {
        $this->container['failedReasonDescription'] = $failedReasonDescription;
        return $this;
    }

    /**
    * Gets failedReasonSolution
    *  **参数解释**: 失败原因的解决方案 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getFailedReasonSolution()
    {
        return $this->container['failedReasonSolution'];
    }

    /**
    * Sets failedReasonSolution
    *
    * @param string|null $failedReasonSolution **参数解释**: 失败原因的解决方案 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setFailedReasonSolution($failedReasonSolution)
    {
        $this->container['failedReasonSolution'] = $failedReasonSolution;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 存在漏洞的软件名称 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 存在漏洞的软件名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appVersion
    *  **参数解释**: 存在漏洞的软件版本 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion **参数解释**: 存在漏洞的软件版本 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
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

