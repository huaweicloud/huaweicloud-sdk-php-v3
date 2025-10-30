<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostHostsResponseInfoVulIdsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostHostsResponseInfo_vul_ids_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * linuxVulIdList  **参数解释**: Linux漏洞的漏洞id列表
    * windowsVulIdList  **参数解释**: Windows漏洞的漏洞id列表
    * webcmsVulIdList  **参数解释**: Web-CMS漏洞的漏洞id列表
    * appVulIdList  **参数解释**: 应用漏洞的漏洞id列表
    * urgentVulIdList  **参数解释**: 应急漏洞的漏洞id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'linuxVulIdList' => 'string[]',
            'windowsVulIdList' => 'string[]',
            'webcmsVulIdList' => 'string[]',
            'appVulIdList' => 'string[]',
            'urgentVulIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * linuxVulIdList  **参数解释**: Linux漏洞的漏洞id列表
    * windowsVulIdList  **参数解释**: Windows漏洞的漏洞id列表
    * webcmsVulIdList  **参数解释**: Web-CMS漏洞的漏洞id列表
    * appVulIdList  **参数解释**: 应用漏洞的漏洞id列表
    * urgentVulIdList  **参数解释**: 应急漏洞的漏洞id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'linuxVulIdList' => null,
        'windowsVulIdList' => null,
        'webcmsVulIdList' => null,
        'appVulIdList' => null,
        'urgentVulIdList' => null
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
    * linuxVulIdList  **参数解释**: Linux漏洞的漏洞id列表
    * windowsVulIdList  **参数解释**: Windows漏洞的漏洞id列表
    * webcmsVulIdList  **参数解释**: Web-CMS漏洞的漏洞id列表
    * appVulIdList  **参数解释**: 应用漏洞的漏洞id列表
    * urgentVulIdList  **参数解释**: 应急漏洞的漏洞id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'linuxVulIdList' => 'linux_vul_id_list',
            'windowsVulIdList' => 'windows_vul_id_list',
            'webcmsVulIdList' => 'webcms_vul_id_list',
            'appVulIdList' => 'app_vul_id_list',
            'urgentVulIdList' => 'urgent_vul_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * linuxVulIdList  **参数解释**: Linux漏洞的漏洞id列表
    * windowsVulIdList  **参数解释**: Windows漏洞的漏洞id列表
    * webcmsVulIdList  **参数解释**: Web-CMS漏洞的漏洞id列表
    * appVulIdList  **参数解释**: 应用漏洞的漏洞id列表
    * urgentVulIdList  **参数解释**: 应急漏洞的漏洞id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'linuxVulIdList' => 'setLinuxVulIdList',
            'windowsVulIdList' => 'setWindowsVulIdList',
            'webcmsVulIdList' => 'setWebcmsVulIdList',
            'appVulIdList' => 'setAppVulIdList',
            'urgentVulIdList' => 'setUrgentVulIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * linuxVulIdList  **参数解释**: Linux漏洞的漏洞id列表
    * windowsVulIdList  **参数解释**: Windows漏洞的漏洞id列表
    * webcmsVulIdList  **参数解释**: Web-CMS漏洞的漏洞id列表
    * appVulIdList  **参数解释**: 应用漏洞的漏洞id列表
    * urgentVulIdList  **参数解释**: 应急漏洞的漏洞id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'linuxVulIdList' => 'getLinuxVulIdList',
            'windowsVulIdList' => 'getWindowsVulIdList',
            'webcmsVulIdList' => 'getWebcmsVulIdList',
            'appVulIdList' => 'getAppVulIdList',
            'urgentVulIdList' => 'getUrgentVulIdList'
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
        $this->container['linuxVulIdList'] = isset($data['linuxVulIdList']) ? $data['linuxVulIdList'] : null;
        $this->container['windowsVulIdList'] = isset($data['windowsVulIdList']) ? $data['windowsVulIdList'] : null;
        $this->container['webcmsVulIdList'] = isset($data['webcmsVulIdList']) ? $data['webcmsVulIdList'] : null;
        $this->container['appVulIdList'] = isset($data['appVulIdList']) ? $data['appVulIdList'] : null;
        $this->container['urgentVulIdList'] = isset($data['urgentVulIdList']) ? $data['urgentVulIdList'] : null;
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
    * Gets linuxVulIdList
    *  **参数解释**: Linux漏洞的漏洞id列表
    *
    * @return string[]|null
    */
    public function getLinuxVulIdList()
    {
        return $this->container['linuxVulIdList'];
    }

    /**
    * Sets linuxVulIdList
    *
    * @param string[]|null $linuxVulIdList **参数解释**: Linux漏洞的漏洞id列表
    *
    * @return $this
    */
    public function setLinuxVulIdList($linuxVulIdList)
    {
        $this->container['linuxVulIdList'] = $linuxVulIdList;
        return $this;
    }

    /**
    * Gets windowsVulIdList
    *  **参数解释**: Windows漏洞的漏洞id列表
    *
    * @return string[]|null
    */
    public function getWindowsVulIdList()
    {
        return $this->container['windowsVulIdList'];
    }

    /**
    * Sets windowsVulIdList
    *
    * @param string[]|null $windowsVulIdList **参数解释**: Windows漏洞的漏洞id列表
    *
    * @return $this
    */
    public function setWindowsVulIdList($windowsVulIdList)
    {
        $this->container['windowsVulIdList'] = $windowsVulIdList;
        return $this;
    }

    /**
    * Gets webcmsVulIdList
    *  **参数解释**: Web-CMS漏洞的漏洞id列表
    *
    * @return string[]|null
    */
    public function getWebcmsVulIdList()
    {
        return $this->container['webcmsVulIdList'];
    }

    /**
    * Sets webcmsVulIdList
    *
    * @param string[]|null $webcmsVulIdList **参数解释**: Web-CMS漏洞的漏洞id列表
    *
    * @return $this
    */
    public function setWebcmsVulIdList($webcmsVulIdList)
    {
        $this->container['webcmsVulIdList'] = $webcmsVulIdList;
        return $this;
    }

    /**
    * Gets appVulIdList
    *  **参数解释**: 应用漏洞的漏洞id列表
    *
    * @return string[]|null
    */
    public function getAppVulIdList()
    {
        return $this->container['appVulIdList'];
    }

    /**
    * Sets appVulIdList
    *
    * @param string[]|null $appVulIdList **参数解释**: 应用漏洞的漏洞id列表
    *
    * @return $this
    */
    public function setAppVulIdList($appVulIdList)
    {
        $this->container['appVulIdList'] = $appVulIdList;
        return $this;
    }

    /**
    * Gets urgentVulIdList
    *  **参数解释**: 应急漏洞的漏洞id列表
    *
    * @return string[]|null
    */
    public function getUrgentVulIdList()
    {
        return $this->container['urgentVulIdList'];
    }

    /**
    * Sets urgentVulIdList
    *
    * @param string[]|null $urgentVulIdList **参数解释**: 应急漏洞的漏洞id列表
    *
    * @return $this
    */
    public function setUrgentVulIdList($urgentVulIdList)
    {
        $this->container['urgentVulIdList'] = $urgentVulIdList;
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

