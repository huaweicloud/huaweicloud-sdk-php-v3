<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskResourcesRequestBodyIacScanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskResourcesRequestBody_iac_scan_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * fileName  文件名称
    * chartName  chart包名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanStatus' => 'string',
            'fileName' => 'string',
            'chartName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * fileName  文件名称
    * chartName  chart包名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanStatus' => null,
        'fileName' => null,
        'chartName' => null
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
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * fileName  文件名称
    * chartName  chart包名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanStatus' => 'scan_status',
            'fileName' => 'file_name',
            'chartName' => 'chart_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * fileName  文件名称
    * chartName  chart包名称
    *
    * @var string[]
    */
    protected static $setters = [
            'scanStatus' => 'setScanStatus',
            'fileName' => 'setFileName',
            'chartName' => 'setChartName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * fileName  文件名称
    * chartName  chart包名称
    *
    * @var string[]
    */
    protected static $getters = [
            'scanStatus' => 'getScanStatus',
            'fileName' => 'getFileName',
            'chartName' => 'getChartName'
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
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['chartName'] = isset($data['chartName']) ? $data['chartName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 512)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chartName']) && (mb_strlen($this->container['chartName']) > 512)) {
                $invalidProperties[] = "invalid value for 'chartName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['chartName']) && (mb_strlen($this->container['chartName']) < 1)) {
                $invalidProperties[] = "invalid value for 'chartName', the character length must be bigger than or equal to 1.";
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
    * Gets scanStatus
    *  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus 文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets chartName
    *  chart包名称
    *
    * @return string|null
    */
    public function getChartName()
    {
        return $this->container['chartName'];
    }

    /**
    * Sets chartName
    *
    * @param string|null $chartName chart包名称
    *
    * @return $this
    */
    public function setChartName($chartName)
    {
        $this->container['chartName'] = $chartName;
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

