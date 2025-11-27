<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportVulRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportVulRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exportHeaders  导出漏洞数据的表头信息列表
    * vulIdList  指定导出的漏洞id列表
    * hostIdList  指定导出的主机id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exportHeaders' => 'string[][]',
            'vulIdList' => 'string[]',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exportHeaders  导出漏洞数据的表头信息列表
    * vulIdList  指定导出的漏洞id列表
    * hostIdList  指定导出的主机id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exportHeaders' => null,
        'vulIdList' => null,
        'hostIdList' => null
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
    * exportHeaders  导出漏洞数据的表头信息列表
    * vulIdList  指定导出的漏洞id列表
    * hostIdList  指定导出的主机id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exportHeaders' => 'export_headers',
            'vulIdList' => 'vul_id_list',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exportHeaders  导出漏洞数据的表头信息列表
    * vulIdList  指定导出的漏洞id列表
    * hostIdList  指定导出的主机id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'exportHeaders' => 'setExportHeaders',
            'vulIdList' => 'setVulIdList',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exportHeaders  导出漏洞数据的表头信息列表
    * vulIdList  指定导出的漏洞id列表
    * hostIdList  指定导出的主机id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'exportHeaders' => 'getExportHeaders',
            'vulIdList' => 'getVulIdList',
            'hostIdList' => 'getHostIdList'
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
        $this->container['exportHeaders'] = isset($data['exportHeaders']) ? $data['exportHeaders'] : null;
        $this->container['vulIdList'] = isset($data['vulIdList']) ? $data['vulIdList'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['exportHeaders'] === null) {
            $invalidProperties[] = "'exportHeaders' can't be null";
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
    * Gets exportHeaders
    *  导出漏洞数据的表头信息列表
    *
    * @return string[][]
    */
    public function getExportHeaders()
    {
        return $this->container['exportHeaders'];
    }

    /**
    * Sets exportHeaders
    *
    * @param string[][] $exportHeaders 导出漏洞数据的表头信息列表
    *
    * @return $this
    */
    public function setExportHeaders($exportHeaders)
    {
        $this->container['exportHeaders'] = $exportHeaders;
        return $this;
    }

    /**
    * Gets vulIdList
    *  指定导出的漏洞id列表
    *
    * @return string[]|null
    */
    public function getVulIdList()
    {
        return $this->container['vulIdList'];
    }

    /**
    * Sets vulIdList
    *
    * @param string[]|null $vulIdList 指定导出的漏洞id列表
    *
    * @return $this
    */
    public function setVulIdList($vulIdList)
    {
        $this->container['vulIdList'] = $vulIdList;
        return $this;
    }

    /**
    * Gets hostIdList
    *  指定导出的主机id列表
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 指定导出的主机id列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

