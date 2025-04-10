<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulScanTaskHostInfoVulScanDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulScanTaskHostInfo_vul_scan_details';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulType  扫描的漏洞类型，包含如下：   - linux_vul : linux漏洞   - windows_vul : windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * status  该类型漏洞的扫描状态，包含如下：   - scanning : 扫描中   - success : 扫描成功   - failed : 扫描失败
    * failedReason  扫描失败的原因，只有扫描失败的漏洞类型有该字段
    * scanVulList  扫描的漏洞列表，只有漏洞类型为应急漏洞有该字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulType' => 'string',
            'status' => 'string',
            'failedReason' => 'string',
            'scanVulList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskHostInfoScanVulList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulType  扫描的漏洞类型，包含如下：   - linux_vul : linux漏洞   - windows_vul : windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * status  该类型漏洞的扫描状态，包含如下：   - scanning : 扫描中   - success : 扫描成功   - failed : 扫描失败
    * failedReason  扫描失败的原因，只有扫描失败的漏洞类型有该字段
    * scanVulList  扫描的漏洞列表，只有漏洞类型为应急漏洞有该字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulType' => null,
        'status' => null,
        'failedReason' => null,
        'scanVulList' => null
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
    * vulType  扫描的漏洞类型，包含如下：   - linux_vul : linux漏洞   - windows_vul : windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * status  该类型漏洞的扫描状态，包含如下：   - scanning : 扫描中   - success : 扫描成功   - failed : 扫描失败
    * failedReason  扫描失败的原因，只有扫描失败的漏洞类型有该字段
    * scanVulList  扫描的漏洞列表，只有漏洞类型为应急漏洞有该字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulType' => 'vul_type',
            'status' => 'status',
            'failedReason' => 'failed_reason',
            'scanVulList' => 'scan_vul_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulType  扫描的漏洞类型，包含如下：   - linux_vul : linux漏洞   - windows_vul : windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * status  该类型漏洞的扫描状态，包含如下：   - scanning : 扫描中   - success : 扫描成功   - failed : 扫描失败
    * failedReason  扫描失败的原因，只有扫描失败的漏洞类型有该字段
    * scanVulList  扫描的漏洞列表，只有漏洞类型为应急漏洞有该字段
    *
    * @var string[]
    */
    protected static $setters = [
            'vulType' => 'setVulType',
            'status' => 'setStatus',
            'failedReason' => 'setFailedReason',
            'scanVulList' => 'setScanVulList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulType  扫描的漏洞类型，包含如下：   - linux_vul : linux漏洞   - windows_vul : windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * status  该类型漏洞的扫描状态，包含如下：   - scanning : 扫描中   - success : 扫描成功   - failed : 扫描失败
    * failedReason  扫描失败的原因，只有扫描失败的漏洞类型有该字段
    * scanVulList  扫描的漏洞列表，只有漏洞类型为应急漏洞有该字段
    *
    * @var string[]
    */
    protected static $getters = [
            'vulType' => 'getVulType',
            'status' => 'getStatus',
            'failedReason' => 'getFailedReason',
            'scanVulList' => 'getScanVulList'
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
        $this->container['vulType'] = isset($data['vulType']) ? $data['vulType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['scanVulList'] = isset($data['scanVulList']) ? $data['scanVulList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) > 32)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) < 1)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 1024)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 0.";
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
    * Gets vulType
    *  扫描的漏洞类型，包含如下：   - linux_vul : linux漏洞   - windows_vul : windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    *
    * @return string|null
    */
    public function getVulType()
    {
        return $this->container['vulType'];
    }

    /**
    * Sets vulType
    *
    * @param string|null $vulType 扫描的漏洞类型，包含如下：   - linux_vul : linux漏洞   - windows_vul : windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    *
    * @return $this
    */
    public function setVulType($vulType)
    {
        $this->container['vulType'] = $vulType;
        return $this;
    }

    /**
    * Gets status
    *  该类型漏洞的扫描状态，包含如下：   - scanning : 扫描中   - success : 扫描成功   - failed : 扫描失败
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
    * @param string|null $status 该类型漏洞的扫描状态，包含如下：   - scanning : 扫描中   - success : 扫描成功   - failed : 扫描失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failedReason
    *  扫描失败的原因，只有扫描失败的漏洞类型有该字段
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
    * @param string|null $failedReason 扫描失败的原因，只有扫描失败的漏洞类型有该字段
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets scanVulList
    *  扫描的漏洞列表，只有漏洞类型为应急漏洞有该字段
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskHostInfoScanVulList[]|null
    */
    public function getScanVulList()
    {
        return $this->container['scanVulList'];
    }

    /**
    * Sets scanVulList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskHostInfoScanVulList[]|null $scanVulList 扫描的漏洞列表，只有漏洞类型为应急漏洞有该字段
    *
    * @return $this
    */
    public function setScanVulList($scanVulList)
    {
        $this->container['scanVulList'] = $scanVulList;
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

