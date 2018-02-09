
plugin.tx_orderext_orderinfomgt {
    view {
        # cat=plugin.tx_orderext_orderinfomgt/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:orderext/Resources/Private/Templates/
        # cat=plugin.tx_orderext_orderinfomgt/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:orderext/Resources/Private/Partials/
        # cat=plugin.tx_orderext_orderinfomgt/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:orderext/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_orderext_orderinfomgt//a; type=string; label=Default storage PID
        storagePid =
    }
}
