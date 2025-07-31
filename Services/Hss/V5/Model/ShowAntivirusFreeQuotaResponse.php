<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAntivirusFreeQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAntivirusFreeQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freeQuota  病毒查杀免费扫描次数
    * occupiedFreeQuota  当前扫描任务占用的免费扫描次数
    * antivirusAlreadyGiven  病毒查杀界面是否已经赠送过免费次数
    * antivirusFreeQuota  病毒查杀界面应该赠送的免费次数
    * reportAlreadyGiven  月度报告界面是否已经赠送过免费次数
    * reportFreeQuota  月度报告界面应该赠送的免费次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeQuota' => 'int',
            'occupiedFreeQuota' => 'int',
            'antivirusAlreadyGiven' => 'bool',
            'antivirusFreeQuota' => 'int',
            'reportAlreadyGiven' => 'bool',
            'reportFreeQuota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freeQuota  病毒查杀免费扫描次数
    * occupiedFreeQuota  当前扫描任务占用的免费扫描次数
    * antivirusAlreadyGiven  病毒查杀界面是否已经赠送过免费次数
    * antivirusFreeQuota  病毒查杀界面应该赠送的免费次数
    * reportAlreadyGiven  月度报告界面是否已经赠送过免费次数
    * reportFreeQuota  月度报告界面应该赠送的免费次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeQuota' => 'int32',
        'occupiedFreeQuota' => 'int32',
        'antivirusAlreadyGiven' => null,
        'antivirusFreeQuota' => 'int32',
        'reportAlreadyGiven' => null,
        'reportFreeQuota' => 'int32'
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
    * freeQuota  病毒查杀免费扫描次数
    * occupiedFreeQuota  当前扫描任务占用的免费扫描次数
    * antivirusAlreadyGiven  病毒查杀界面是否已经赠送过免费次数
    * antivirusFreeQuota  病毒查杀界面应该赠送的免费次数
    * reportAlreadyGiven  月度报告界面是否已经赠送过免费次数
    * reportFreeQuota  月度报告界面应该赠送的免费次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freeQuota' => 'free_quota',
            'occupiedFreeQuota' => 'occupied_free_quota',
            'antivirusAlreadyGiven' => 'antivirus_already_given',
            'antivirusFreeQuota' => 'antivirus_free_quota',
            'reportAlreadyGiven' => 'report_already_given',
            'reportFreeQuota' => 'report_free_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freeQuota  病毒查杀免费扫描次数
    * occupiedFreeQuota  当前扫描任务占用的免费扫描次数
    * antivirusAlreadyGiven  病毒查杀界面是否已经赠送过免费次数
    * antivirusFreeQuota  病毒查杀界面应该赠送的免费次数
    * reportAlreadyGiven  月度报告界面是否已经赠送过免费次数
    * reportFreeQuota  月度报告界面应该赠送的免费次数
    *
    * @var string[]
    */
    protected static $setters = [
            'freeQuota' => 'setFreeQuota',
            'occupiedFreeQuota' => 'setOccupiedFreeQuota',
            'antivirusAlreadyGiven' => 'setAntivirusAlreadyGiven',
            'antivirusFreeQuota' => 'setAntivirusFreeQuota',
            'reportAlreadyGiven' => 'setReportAlreadyGiven',
            'reportFreeQuota' => 'setReportFreeQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freeQuota  病毒查杀免费扫描次数
    * occupiedFreeQuota  当前扫描任务占用的免费扫描次数
    * antivirusAlreadyGiven  病毒查杀界面是否已经赠送过免费次数
    * antivirusFreeQuota  病毒查杀界面应该赠送的免费次数
    * reportAlreadyGiven  月度报告界面是否已经赠送过免费次数
    * reportFreeQuota  月度报告界面应该赠送的免费次数
    *
    * @var string[]
    */
    protected static $getters = [
            'freeQuota' => 'getFreeQuota',
            'occupiedFreeQuota' => 'getOccupiedFreeQuota',
            'antivirusAlreadyGiven' => 'getAntivirusAlreadyGiven',
            'antivirusFreeQuota' => 'getAntivirusFreeQuota',
            'reportAlreadyGiven' => 'getReportAlreadyGiven',
            'reportFreeQuota' => 'getReportFreeQuota'
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
        $this->container['freeQuota'] = isset($data['freeQuota']) ? $data['freeQuota'] : null;
        $this->container['occupiedFreeQuota'] = isset($data['occupiedFreeQuota']) ? $data['occupiedFreeQuota'] : null;
        $this->container['antivirusAlreadyGiven'] = isset($data['antivirusAlreadyGiven']) ? $data['antivirusAlreadyGiven'] : null;
        $this->container['antivirusFreeQuota'] = isset($data['antivirusFreeQuota']) ? $data['antivirusFreeQuota'] : null;
        $this->container['reportAlreadyGiven'] = isset($data['reportAlreadyGiven']) ? $data['reportAlreadyGiven'] : null;
        $this->container['reportFreeQuota'] = isset($data['reportFreeQuota']) ? $data['reportFreeQuota'] : null;
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
    * Gets freeQuota
    *  病毒查杀免费扫描次数
    *
    * @return int|null
    */
    public function getFreeQuota()
    {
        return $this->container['freeQuota'];
    }

    /**
    * Sets freeQuota
    *
    * @param int|null $freeQuota 病毒查杀免费扫描次数
    *
    * @return $this
    */
    public function setFreeQuota($freeQuota)
    {
        $this->container['freeQuota'] = $freeQuota;
        return $this;
    }

    /**
    * Gets occupiedFreeQuota
    *  当前扫描任务占用的免费扫描次数
    *
    * @return int|null
    */
    public function getOccupiedFreeQuota()
    {
        return $this->container['occupiedFreeQuota'];
    }

    /**
    * Sets occupiedFreeQuota
    *
    * @param int|null $occupiedFreeQuota 当前扫描任务占用的免费扫描次数
    *
    * @return $this
    */
    public function setOccupiedFreeQuota($occupiedFreeQuota)
    {
        $this->container['occupiedFreeQuota'] = $occupiedFreeQuota;
        return $this;
    }

    /**
    * Gets antivirusAlreadyGiven
    *  病毒查杀界面是否已经赠送过免费次数
    *
    * @return bool|null
    */
    public function getAntivirusAlreadyGiven()
    {
        return $this->container['antivirusAlreadyGiven'];
    }

    /**
    * Sets antivirusAlreadyGiven
    *
    * @param bool|null $antivirusAlreadyGiven 病毒查杀界面是否已经赠送过免费次数
    *
    * @return $this
    */
    public function setAntivirusAlreadyGiven($antivirusAlreadyGiven)
    {
        $this->container['antivirusAlreadyGiven'] = $antivirusAlreadyGiven;
        return $this;
    }

    /**
    * Gets antivirusFreeQuota
    *  病毒查杀界面应该赠送的免费次数
    *
    * @return int|null
    */
    public function getAntivirusFreeQuota()
    {
        return $this->container['antivirusFreeQuota'];
    }

    /**
    * Sets antivirusFreeQuota
    *
    * @param int|null $antivirusFreeQuota 病毒查杀界面应该赠送的免费次数
    *
    * @return $this
    */
    public function setAntivirusFreeQuota($antivirusFreeQuota)
    {
        $this->container['antivirusFreeQuota'] = $antivirusFreeQuota;
        return $this;
    }

    /**
    * Gets reportAlreadyGiven
    *  月度报告界面是否已经赠送过免费次数
    *
    * @return bool|null
    */
    public function getReportAlreadyGiven()
    {
        return $this->container['reportAlreadyGiven'];
    }

    /**
    * Sets reportAlreadyGiven
    *
    * @param bool|null $reportAlreadyGiven 月度报告界面是否已经赠送过免费次数
    *
    * @return $this
    */
    public function setReportAlreadyGiven($reportAlreadyGiven)
    {
        $this->container['reportAlreadyGiven'] = $reportAlreadyGiven;
        return $this;
    }

    /**
    * Gets reportFreeQuota
    *  月度报告界面应该赠送的免费次数
    *
    * @return int|null
    */
    public function getReportFreeQuota()
    {
        return $this->container['reportFreeQuota'];
    }

    /**
    * Sets reportFreeQuota
    *
    * @param int|null $reportFreeQuota 月度报告界面应该赠送的免费次数
    *
    * @return $this
    */
    public function setReportFreeQuota($reportFreeQuota)
    {
        $this->container['reportFreeQuota'] = $reportFreeQuota;
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

